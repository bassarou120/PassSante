<?php

namespace PS\GestionBundle\Controller;

use PS\GestionBundle\Entity\Corporate;
use PS\GestionBundle\Entity\RendezVous;
use PS\GestionBundle\Form\SmsType;
use PS\UtilisateurBundle\Entity\Personne;
use PS\ParametreBundle\Entity\Ville;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class SmsController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function indexAction(Request $request)
    {
        $corporate = $request->query->get('corporate');
        $ville = $request->query->get('ville');
        $nbrSend = intval($request->query->get('nombre'));
        $em       = $this->getDoctrine()->getManager();
        $rep      = $em->getRepository(Personne::class);
        $repC     = $em->getRepository(Corporate::class);
        $repVille     = $em->getRepository(Ville::class);
        $smsMtarget  = $this->get('app.mtarget_sms');
        $sender = 'CN SANTE CI';

        if (($corporate || $ville) || ($corporate && $ville) ) {
            $contacts = $rep->getCustomerByCorporate($corporate, $ville);
        } else{
            $contacts = $rep->getCustomerNumbers();
            $relatives = $rep->getRelativeNumbers();
            $contacts = array_merge($contacts, $relatives);
        }
        

        $smsManager     = $this->get('app.ps_sms');
        $availableUnits = $smsManager->availableUnits();
        $form           = $this->createForm(SmsType::class, null, [
            'action' => $this->generateUrl('admin_gestion_sms_index', ['corporate' => $corporate])
        ]);

        $corporates = $repC->findAll();
        $villes = $repVille->findAll();

        $errors = [];

        $numbers = array_unique(array_column($contacts, 'contact'));
        $contacts =  $numbers;

        if ($nbrSend == 0) {
            if (count($contacts) > 500) {
                $nbrSend = 500;
                $message = sprintf("Vous n'avez pas de nombre d'envoi, le système enverra à 500 contacts");
                $this->addFlash('message', $message);
            }else {
                $nbrSend = count($contacts);
            }
        }else {
           if ($nbrSend > 3000) {
            $message = sprintf("Le nombre limite d'envoi simultané est de 3000 contacts");
            $this->addFlash('message', $message);
            $nbrSend = 3000;
           }

           if (count($numbers) < $nbrSend) {
            $message = sprintf('Le nombres totals de contact trouvé est de %s', count($numbers));
            $this->addFlash('message', $message);
            $nbrSend = count($numbers);
            }
        }
    
        $numbers =  array_slice($numbers, 1, $nbrSend);
        
        // Permet de verifier si les anciens numeros sont a 10
        $numbersValids = [];
        $suffixe_moov = ['01', '02', '03', '40', '41', '42', '43', '50', '51', '52', '53', '70', '71', '72', '73'];
        $suffixe_mtn = ['04', '05', '06', '44', '45', '46', '54', '55', '56', '64', '65', '66', '74', '75', '76', '84', '85', '86', '94', '95', '96'];
        $suffixe_orange = ['07', '08', '09', '47', '48', '49', '57', '58', '59', '67', '68', '69', '77', '78', '79', '87', '88', '89', '97', '98'];
        

        foreach ($numbers as $key => $value) {
            $prefixe = substr($value, 0, 2);

            if (!(strlen($value) == 10)) {

                if ($prefixe == '00') {
                    // unset($value);
                }

                if ($prefixe && in_array($prefixe, $suffixe_orange)) {
                    $contact = sprintf('07%s', $value);
                    $numbersValids[] = $contact;
                }
                if ($prefixe && in_array($prefixe, $suffixe_mtn)) {
                    $contact = sprintf('05%s', $value);
                    $numbersValids[] = $contact;
                }
                if ($prefixe && in_array($prefixe, $suffixe_moov)) {
                    $contact = sprintf('01%s', $value);
                    $numbersValids[] = $contact;
                }
                

            }else{
                $numbersValids[] = $value;
            }
        }

        $numbersValids = array_unique($numbersValids);

        $numbersValids = implode(',', $numbersValids);

        $form->get('contacts')->setData($numbersValids);
        $form->get('message')->setData("\n\nInfo-Line (0708289006) - www.santemousso.net");

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $_contacts = explode(',', $form->get('contacts')->getData());

           
            if ($form->get('limit')->getData()) {
                $limits = array_map('intval', array_map('trim', explode(',', $form->get('limit')->getData())));

                if (count($limits) == 1) {
                    $_contacts = array_slice($_contacts, 0, $limits[0]);
                } else if (count($limits) == 2) {
                    $_contacts = array_slice($_contacts, $limits[0], $limits[1]);
                }
            }
           
            if ($response = $smsMtarget->sendSMS($_contacts, $form->get('message')->getData(), $sender)) 
            {
                $success = $response['success'];
                $message = sprintf('%s/%s envoyé(s) avec succès', $success, count($_contacts));
                $this->addFlash('message', $message);

                return $this->redirectToRoute('admin_gestion_sms_index');
            } else {
                // $errors = $smsManager->errors();
            }
        }

        return $this->render('GestionBundle:Sms:index.html.twig', [
            'form'           => $form->createView(),
            'errors'         => $errors,
            'contacts'       => $contacts,
            'selectContacts'       => $nbrSend,
            'corporates'     => $corporates,
            'corporate'     => $corporate,
            'villes'     => $villes,
            'ville'     => $ville,
            'availableUnits' => $availableUnits,
            // ...
        ]);
    }

    public function importAction(Request $request)
    {
        $session = $request->getSession();
        $mode = $request->query->get('mode');
        $form = null;
        $errors = [];
        if (!$mode || $mode != 'sms') {
            $session->remove('sms__contacts');
            $formBuilder = $this->createFormBuilder(null, [
                'action' => $this->generateUrl('admin_gestion_sms_import', ['mode' => 'import'])
            ])
                ->add('colonne', null, [
                    'label' => 'Colonne contenant les numéros', 'constraints' => [
                        new NotBlank(['message' => 'Veuillez renseigner la colonne']),
                        new Regex('/[a-z]{1,}\d+/i')
                    ]
                ])
                ->add('file', FileType::class, [
                    'label' => 'Fichier', 'constraints' => [
                        new NotBlank(['message' => 'Veuillez renseigner un fichier'])
    
                    ]
                ]);
    
            $form = $formBuilder->getForm();
    
            $form->handleRequest($request);
            $values = [];
            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $colonne = $form->get('colonne')->getData();
                    $fichier = $this->get('app.psm_logo_uploader')
                        ->upload($form->get('file')->getData(), null, $path, 'sms_contact');
                    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    
                    $spreadsheet = $this->get('phpoffice.spreadsheet');
                    if ($extension == 'xlsx') {
                        $reader = $spreadsheet->createReader('Xlsx');
                    } else {
                        $reader = $spreadsheet->createReader('Csv');
                    }
    
                    $loader = $reader->load($path);
    
    
    
                    $count = $loader->getSheetCount();
    
                    preg_match('/([a-z]{1,})(\d+)/i', $colonne, $matches);
                    $columnName = $matches[1];
                    $startIndex = $matches[2];
    
    
                    for ($i = 0; $i < $count; $i++) {
    
                        $loader->setActiveSheetIndex($i);
                        $worksheet = $loader->getActiveSheet();
                        $data = $worksheet->toArray();
    
                        $data = array_slice($data, $startIndex - 1);
    
                        foreach ($data as $row) {
                            $values[] = preg_replace('/[\s+\-]|[^0-9\/]/i', '', $worksheet->getCell($columnName . $startIndex)->getValue());
    
                            $startIndex += 1;
                        }
                    }

                    if ($filteredValues = array_filter($values)) {
                        $session->set('sms__contacts', $filteredValues);
                        return $this->redirectToRoute('admin_gestion_sms_import', ['mode' => 'sms']);
                    } else {
                        $form->add(new FormError('Impossible d\'extraire dans la colonne choisie'));
                    }
                }
            }
        } else {
            if (!$session->get('sms__contacts')) {
                return $this->redirectToRoute('admin_gestion_sms_import');
            }
            $form           = $this->createForm(SmsType::class, null, [
                'action' => $this->generateUrl('admin_gestion_sms_import', ['mode' => 'sms'])
            ]);

            $numbers = array_unique($session->get('sms__contacts'));


            foreach ($numbers as &$number) {
                $number = array_map('trim', explode('/', $number));
            }

            unset($number);

    

            $numbers = implode(',', array_flatten($numbers));

            
    
    
            $form->get('contacts')->setData($numbers);
    
            $form->handleRequest($request);
            
            $smsManager     = $this->get('app.ps_sms');

            if ($form->isSubmitted() && $form->isValid()) {

                $_contacts = explode(',', $form->get('contacts')->getData());
                if ($response = $smsManager->send($form->get('message')->getData(), $_contacts)) {
                    $success = $response['success'];
                    $message = sprintf('%s/%s envoyé(s) avec succès', $success, count($_contacts));
                    $this->addFlash('message', $message);
    
                    return $this->redirectToRoute('admin_gestion_sms_import', ['mode' => 'sms']);
                } else {
                    $errors = $smsManager->errors();
                }
            }


    
        }
       
        return $this->render('GestionBundle:Sms:import.html.twig', [
            'form' => $form ? $form->createView(): null,
            'errors' => $errors
        ]);
    }


    private function convertDate($date, $format = 'd/m/Y')
    {
        if ($dt = \DateTime::createFromFormat($format, $date)) {
            return $dt->format('Y-m-d');
        }

        return '';
    }

    /**
     * @param Request $request
     * @param Corporate $corporate
     */
    public function excelAction(Request $request, Corporate $corporate)
    {
        $em  = $this->getDoctrine()->getManager();
        $rep = $em->getRepository(Personne::class);
        $mode = $request->query->get('mode');
        $fin = $request->query->get('fin');
        $debut = $request->query->get('debut');

        $_fin = $this->convertDate($fin);
        $_debut = $this->convertDate($debut);



        $params = [$corporate, ['fin' => $_fin, 'debut' => $_debut]];

        $data = $mode ? $rep->getParentByCorporate(...$params) : $rep->getCustomerByCorporate(...$params);

        if ($data) {
            $range       = range('A', 'D');
            if ($mode) {
                
            }

           
            $spreadsheet = $this->get('phpoffice.spreadsheet')->createSpreadSheet();
            $sheet       = $spreadsheet->getActiveSheet();

            if ($debut) {
             
              if (!$fin) {
                $lib = "Période à partir du ".$debut; 
              } else {
                $lib = "Période du {$debut} au {$fin}";
              }
            }

            if ($fin && !$debut) {
                $lib = "Période au {$fin}";
            }
            if (isset($lib)) {
                $sheet->setCellValue("A1", $lib);
            } else {
                $sheet->setCellValue("A1", "Liste des patients");
            }

            $sheet->mergeCells("A1:E1");
           
            $sheet->getStyle('A2:D2')->getFont()->setBold(true);
            $headers = ['Nom', 'Prénom', 'Lieu habitation', 'Contact'];
            if ($mode) {
                $range[] = 'E';
                $headers[] = 'Parent';
            } else {
                $headers = array_merge($headers, ['ID', 'PIN']);
            }

            foreach ($range as $index => $col) {
                $sheet->getColumnDimension($col)->setAutoSize(true);
                $sheet->setCellValue("{$col}2", $headers[$index]);
            }

            $sheet->getStyle('D')->getAlignment()->setHorizontal('right');

            $index = 3;

            foreach ($data as $row) {

                $sheet->setCellValue("A$index", $row['nom']);
                $sheet->setCellValue("B$index", $row['prenom']);
                $sheet->setCellValue("C$index", $row['lieuhabitation']);

                
                $sheet->setCellValue("D$index", "{$row['contact']};");
            
                if (isset($row['nom_parent'])) {
                    $sheet->setCellValue("E$index", $row['nom_parent']);
                }

                if (isset($row['identifiant'])) {
                    $sheet->setCellValue("F$index", $row['identifiant']);
                }

                if (isset($row['pin'])) {
                    $sheet->setCellValue("G$index", $row['pin']);
                }

                $index += 1;
            }

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment;filename="liste_patient_' . $corporate->getRaisonSociale() . '.xlsx"');
            header('Cache-Control: max-age=0');
            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            //$writer->save('utilisateur_'.date('d_m_Y').'.xlsx');
            $writer->save('php://output');
            exit;
        }
    }

    /**
     * @param Request $request
     */
    public function sendAction(Request $request)
    {
        $em             = $this->getDoctrine()->getEntityManager();
        $smsManager     = $this->get('app.ps_sms');
        $availableUnits = $smsManager->availableUnits();
        $results        = $em->getRepository(RendezVous::class)->getFromToday();
    }

    /**
     * @return mixed
     */
    public function newAction()
    {
        return $this->render('GestionBundle:Sms:new.html.twig', [
            // ...
        ]);
    }

    /**
     * @return mixed
     */
    public function statsAction()
    {
        return $this->render('GestionBundle:Sms:stats.html.twig', [
            // ...
        ]);
    }

}
