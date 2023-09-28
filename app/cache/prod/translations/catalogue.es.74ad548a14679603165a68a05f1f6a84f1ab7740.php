<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Este valor no es un UUID válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso.',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario.',
    'fos_user.username.short' => 'El nombre de usuario es demasiado corto.',
    'fos_user.username.long' => 'El nombre de usuario es demasiado largo.',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso.',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo.',
    'fos_user.email.short' => 'La dirección de correo es demasiado corta.',
    'fos_user.email.long' => 'La dirección de correo es demasiado larga.',
    'fos_user.email.invalid' => 'La dirección de correo no es válida.',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña.',
    'fos_user.password.short' => 'La contraseña es demasiado corta.',
    'fos_user.password.mismatch' => 'Las dos contraseñas no coinciden.',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña.',
    'fos_user.new_password.short' => 'La nueva contraseña es demasiado corta.',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida.',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre.',
    'fos_user.group.short' => 'El nombre es demasiado corto.',
    'fos_user.group.long' => 'El nombre es demasiado largo.',
    'fos_group.name.already_used' => 'El nombre ya está en uso.',
    'rdv.pin' => 'ingrese el código PIN',
    'rdv.identifiant' => 'ingrese el ID',
    'rdv.libRendezVous.required' => 'Ingrese el motivo de la cita',
    'rdv.libRendezVous.max' => 'La etiqueta no debe superar los {{limit}} caracteres',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado.',
    'group.flash.created' => 'El grupo ha sido creado.',
    'group.flash.deleted' => 'El grupo ha sido borrado.',
    'security.login.username' => 'Nombre de usuario',
    'security.login.password' => 'Contraseña',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado.',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'registration.check_email' => 'Se ha enviado un correo electrónico a %email%. Contiene un enlace de activación al que debes acceder para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente.',
    'registration.email.subject' => '¡Bienvenido %username%!',
    'registration.email.message' => '¡Hola %username%!

Para completar la validación de tu cuenta, por favor visita %confirmationUrl%

Este enlace sólo puede utilizarse una vez para validar tu cuenta.

Atentamente,
el Equipo.
',
    'resetting.check_email' => 'Se ha enviado un correo electrónico a tu cuenta de correo. Contiene un enlace de activación al que debes acceder para restablecer tu contraseña.
Nota: Solo se puede solicitar una nueva contraseña cada %tokenLifetime% horas.

Si no recibes un correo electrónico, comprueba tu carpeta de correo no deseado o inténtalo de nuevo.
',
    'resetting.request.username' => 'Nombre de usuario o correo electrónico',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'resetting.email.subject' => 'Restablecer Contraseña',
    'resetting.email.message' => '¡Hola %username%!

Para restablecer tu contraseña, por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo',
    'form.username' => 'Nombre de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contraseña actual',
    'form.password' => 'Contraseña',
    'form.password_confirmation' => 'Repita la contraseña',
    'form.new_password' => 'Nueva contraseña',
    'form.new_password_confirmation' => 'Repita la contraseña',
  ),
  'messages' => 
  array (
    'Page' => 'Página',
    ', Display' => ', Mostrar',
    'of %count%' => 'de %count%',
    'Items per page' => 'Registros por página',
    'Select visible' => 'Seleccionar visible',
    'Select all' => 'Seleccionar todo',
    'Deselect visible' => 'Deseleccionar visible',
    'Deselect all' => 'Deseleccionar todo',
    'Action' => 'Acción',
    'Submit Action' => 'Enviar',
    'From:' => 'De:',
    'To:' => 'Para:',
    'eq' => 'Igual a',
    'neq' => 'Distinto a',
    'lt' => 'Menor que',
    'lte' => 'Menor o igual que',
    'gt' => 'Mayor que',
    'gte' => 'Mayor o igual que',
    'req' => 'Expresión regular',
    'like' => 'Contiene',
    'nlike' => 'No contiene',
    'rlike' => 'Comienza con',
    'llike' => 'Termina con',
    'btw' => 'Entre (exclusivo)',
    'btwe' => 'Entre (inclusivo)',
    'isNull' => 'No está definido',
    'isNotNull' => 'Está definido',
    '%count% Results, ' => '%count% Registro, |%count% Registros, ',
    'Delete' => 'Borrar',
    'No result' => 'Sin resultados',
    'Actions' => 'Acciones',
    'No data' => 'Sin datos',
    'Export' => 'Exportar',
    'rdv.form.specialite' => 'Especialidad',
    'rdv.form.identifiant' => 'ID',
    'rdv.form.pin' => 'PIN',
    'rdv.form.placeholder.specialite' => 'Elija una especialidad',
    'rdv.form.libRendezVous' => 'Razón de la cita',
    'rdv.form.statutRendezVous' => 'Presencia real del paciente',
    'rdv.form.dateRendezVous' => 'Fecha y hora de la cita',
    'rules.password.length' => '%num% carateres',
    'rules.password.special' => '%num% caratere especial',
    'rules.password.number' => '%num% figura',
    'rules.password.upper_lower' => '%num% Mayúscula y minúscula',
    'rules.username.valid' => 'Caracteres alfanuméricos y _',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Anterior',
    'label_next' => 'Siguiente',
  ),
  'admin' => 
  array (
    'Légende' => 'Leyenda',
    'Tableau de bord' => 'Salpicadero',
    'RDV et Rappels de vaccins' => 'Citas y recordatorios de vacunas',
    'username' => 'Pseudo',
    'email' => 'Adresse e-mail',
    'password' => 'Mot de passe',
    'role' => 'Rôle(s)',
    'rdv.new' => 'Nueva cita',
    'rdv.search' => 'Encuentra una cita',
    'rdv.details' => NULL,
    'rdv.cancelled' => 'Cita cancelada',
    'rdv.patient' => 'Presencia real del paciente',
    'rdv.no_delete' => 'No se puede modificar esta cita. Fue cancelado o ya validado',
    'btn.validate' => 'Validar',
    'btn.back' => 'Regreso',
    'btn.cancel' => 'Anular',
    'btn.emergency' => 'informe una emergencia',
    'btn.suivi_constante' => 'Constantes de seguimiento',
    'btn.user_account' => 'Mi cuenta de usuario',
    'btn.profile_medicale' => 'Perfil médico',
    'btn.rappel_vaccin' => 'Recordatorios de vacunas',
    'admin.welcome' => 'Bienvenido a tu área de usuario',
    'admin.is_logged_in' => 'Conectado',
    'admin.alert_medicament' => 'Se han ofrecido medicamentos alternativos en %sub%',
    'admin.total_waiting_consultation' => '<a href="%link%">%total_sub% consulta (s) </a>',
    'admin.no_data' => 'Sin datos',
    'admin.last_measures' => 'Últimas constantes',
    'registration.title' => 'Creación de cuenta',
    'registration.has_account' => 'Yo ya soy un miembro',
    'registration.registration_text' => 'Creación de cuenta',
    'registration.terms' => 'Acepto los <a href="%link%">términos y condiciones</a>',
    'registration.form.placeholder.username' => 'Iniciar sesión',
    'registration.form.placeholder.email' => 'Correo electrónico',
    'registration.form.placeholder.contact' => 'Número de teléfono',
    'registration.form.placeholder.plainPassword.first' => 'Contraseña',
    'registration.form.placeholder.plainPassword.second' => 'Escriba la contraseña otra vez',
    'security.password' => 'contraseña olvidada',
    'security.login_text' => 'Conéctate a tu espacio',
    'security.title' => 'Iniciar sesión',
    'security.form.placeholder._username' => 'Iniciar sesión',
    'security.form.placeholder._password' => 'Contraseña',
    'consultation.new' => 'Nueva consulta',
    'consultation.patient_waiting' => 'Paciente (s) en espera de consultas',
    'consultation.no_patient_waiting' => 'Ningún paciente en la fila en este momento',
    'profile.details' => 'Détails utilisateur',
    'profile.change_password' => 'Modification du mot de passe',
    'profile.edit' => 'Modifier',
    'profile.name' => 'Nom',
    'profile.surname' => 'Prénom(s)',
    'profile.contact' => 'Numéro de téléphone',
    'profile.age' => 'Âge',
    'profile.years' => '%age% ans',
    'profile.user_info' => 'Informations sur l\'utilisateur',
  ),
  'consultation' => 
  array (
  ),
  'menu' => 
  array (
    'Déconnexion' => 'Cerrar sesión',
    'Tableau de bord' => 'Salpicadero',
    'Consultation' => 'Consulta médica',
    'Mes rendez-vous' => 'Mis citas',
    'Votre historique' => 'Tu historia',
    'Suivi Patient' => 'Seguimiento del paciente',
    'MENU PRINCIPAL' => 'MENÚ PRINCIPAL',
    'Mon compte PSM' => 'Mi cuenta de PSM',
    'Patient' => 'Paciente',
    'Réseaux de soins/distribution' => 'Redes de distribución',
    'FAQ' => 'Preguntas más frecuentes',
    'Mes comptes' => 'Mis cuentas',
    'Ordonnances' => 'Pedidos',
    'Votre historique médical' => 'Tu historial medico',
    'Suivi Constantes' => 'Constantes de monitoreo',
    'Suivi/Evolution' => 'Seguimiento / Evolución',
    'Informations' => 'Información',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
    'password.require_special' => 'Votre mot de passe doit être composé d\'au moins un caractère spécial.',
    'password.require_lower_upper' => 'Votre mot de passe doit être composé d\'au moins une lettre majuscule et miniscule.',
    'password.require_number' => 'Votre mot de passe doit être composé d\'au moins 1 chiffre.',
    'password.require_lower' => 'Votre mot de passe doit être composé d\'une lettre miniscule.',
    'password.require_upper' => 'Votre mot de passe doit être composé d\'une lettre majuscule.',
    'password.require_casediff' => 'Votre mot de passe doit être composé d\'au moins une lettre majuscule et miniscule.',
    'password.minlength' => 'Votre mot de passe doit être composé d\'au moins {{length}} caractères.',
    'username.alphanumeric' => 'La chaîne "{{ string }}" contient des caractères illégaux: Il doit contenir des caractères alphanumériques et _',
    'pass.id_pin_not_found' => 'Le couple Identifiant + Pin n\\\'existe pas dans notre BDD ou n\'est pas actif ou a déjà été utilisé',
    'pass.not_same_corporate' => 'Vous ne pouvez pas modifier l\'affiliation de ce patient',
    'pass.pass.not_in_corporate' => 'Le coupe ID + PIN appartient à un corporate différent de celui que vous avez choisi',
    'rdv.pin' => 'Veuillez renseigner le code PIN',
    'rdv.identifiant' => 'Veuillez renseigner l\'ID',
    'rdv.libRendezVous.required' => 'Veuillez renseigner motif du RDV',
    'rdv.libRendezVous.max' => 'Le motif ne doit pas excéder {{ limit }} caractères',
    'patient.duplicate_matricule' => 'Ce matricule est déjà associé à un patient',
    'patient.duplicate_id' => 'Ce ID est déjà associé au compte d\'un patient',
    'patient.invalid_sexe' => 'Veuillez choisir entre F et H',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Ce lien ne peut être utilisé qu\'une seule fois pour valider votre compte.

Cordialement,
L\'équipe
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
    'layout.profile' => 'Profil',
    'resetting.password_already_requested' => 'Un nouveau mot de passe a déjà été demandé pour cet utilisateur dans les dernières 24 heures.',
    'resetting.invalid_username' => 'Le nom d\'utilisateur "%username%" n\'existe pas.',
    'resetting.username' => 'Nom d\'utilisateur',
    'resetting.submit' => 'Réinitialiser le mot de passe',
    'resetting.email.message_mobile' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Si vous utilisez l\'application mobile. Veuillez utilisez ce code %code%

Cordialement,
L\'équipe du PSM
',
  ),
  'messages' => 
  array (
    'You have %total% notifications' => 'Vous avez %total% notifications',
    'Home' => 'Accueil',
    'Dernière connexion %date%' => 'Last connection %date%',
    'Symfony2 is great' => 'J\'aime Symfony2',
    'Page' => 'Page',
    ', Display' => ', Afficher',
    'of %count%' => 'sur %count%',
    'Items per page' => 'Résultats par page',
    'Select visible' => 'Sélectionner visible',
    'Select all' => 'Sélectionner tout',
    'Deselect visible' => 'Désélectionner visible',
    'Deselect all' => 'Désélectionner tout',
    'Action' => 'Action',
    'Submit Action' => 'Exécuter',
    'From:' => 'De:',
    'To:' => 'À:',
    'eq' => 'Égal à',
    'neq' => 'Différent de',
    'lt' => 'Inférieur à',
    'lte' => 'Inférieur ou égal à',
    'gt' => 'Supérieur à',
    'gte' => 'Supérieur ou égal à',
    'req' => 'Expression régulière',
    'like' => 'Contient',
    'nlike' => 'Ne contient pas',
    'rlike' => 'Commence par',
    'llike' => 'Finit par',
    'btw' => 'Entre exclusif',
    'btwe' => 'Entre inclusif',
    'isNull' => 'N\'est pas défini',
    'isNotNull' => 'Est défini',
    '%count% Results, ' => '%count% Résultat, |%count% Résultats, ',
    'Search' => 'Rechercher',
    'Reset' => 'Réinitialiser',
    'Order by' => 'Trier par',
    'slike' => 'Contient',
    'nslike' => 'Ne contient pas',
    'rslike' => 'Commence par',
    'lslike' => 'Finit par',
    'home.title' => 'Bienvenue sur le site officiel du PASS SANTE',
    'home.button.submit' => 'Valider',
    'home.banner.title0' => 'Le Pass<span class="fa fa-plus-square text-primary"></span>Santé',
    'home.banner.title1' => 'Votre carnet de santé électronique',
    'home.menu.home' => 'Accueil',
    'home.menu.pass' => 'Pass Santé',
    'home.menu.partners' => 'Nos partenaires',
    'home.menu.contact' => 'Nous Contacter',
    'home.menu.sensibilisation' => 'Sensibilisation',
    'home.menu.surveillance' => 'Surveillance COVID-19',
    'home.menu.login' => 'Connexion',
    'home.menu.logout' => 'Deconnexion',
    'home.menu.pharmacie_garde' => 'Pharmacie de garde',
    'home.menu.account' => 'Mon compte',
    'home.menu.register' => 'Enregistrement',
    'home.menu.login_register' => 'Connexion/Enregistrement',
    'home.menu.distrib' => 'Réseaux de distribution',
    'home.menu.pharmacie' => 'E-Pharmacie',
    'home.menu.franchise' => 'Franchises',
    'home.menu.presentation' => 'Présentation',
    'home.menu.hiw' => 'Comment ça marche ?',
    'home.menu.download_app' => 'Application PASS SANTE',
    'home.menu.cgv' => 'CGV',
    'home.slider.pass' => NULL,
    'home.footer.footer1.title' => '#PASS SANTE',
    'home.footer.footer1.menu.register' => 'Créer un compte',
    'home.footer.footer2.title' => 'Centres de Santé',
    'home.footer.footer3.title' => 'Télécharger notre application',
    'home.footer.copyright' => 'Fait avec <span class="fa fa-heart color-primary"></span>  par <a href="//mcm-ci.com"><strong><abbr title="Maurice Communication marketing">MCM</abbr></strong></a>',
    'home.btn.submit' => 'Valider',
    'home.btn.send' => 'Envoyer',
    'home.btn.logout' => 'Déconnexion',
    'home.form.id' => 'Entrez votre ID',
    'home.form.pin' => 'Entrez votre PIN',
    'home.form.matricule' => 'Entrez votre ID ou matricule',
    'home.form.localisation' => 'Entrez votre localisation (Peut être déterminé automatiquement par géolocalisation si en cas d\'urgence)',
    'home.form.lang.chose_lang' => 'Choisir la langue',
    'home.form.lang.fr' => 'Français',
    'home.form.lang.en' => 'English',
    'home.form.lang.es' => 'Español',
    'home.form.contact.contact' => 'N° de Téléphone',
    'home.form.contact.name' => 'Nom et Prénom',
    'home.form.contact.email' => 'Email',
    'home.form.contact.ville' => 'Ville',
    'home.form.contact.subject' => 'Objet',
    'home.form.contact.message' => 'Message',
    'home.form.contact.categorie' => 'Catégorie',
    'home.form.contact.dropdown_categories.technical' => 'Problèmes Techniques',
    'home.form.contact.dropdown_categories.info' => 'Informations',
    'home.form.contact.dropdown_categories.convention' => 'Demande de convention (Centres de santé, Ecoles, Pharmacies, Assurance)',
    'home.form.contact.dropdown_categories.franchise' => 'Demande de Franchise',
    'home.form.contact.dropdown_categories.other' => 'Autres',
    'home.form.contact.dropdown_villes.ville1' => 'TANDA',
    'home.form.contact.dropdown_villes.ville2' => 'ABIDJAN',
    'home.form.contact.dropdown_villes.ville3' => 'ABENGOUROU',
    'home.form.contact.form_message.success' => 'Votre mail a été envoyé. Nous vous repondrons dans les plus brefs délais!',
    'home.form.contact.form_message.error' => 'Votre mail n\\\'a pas été envoyé. Merci réessayer!',
    'home.section.award.title' => 'Recompenses',
    'home.section.vip.title' => 'Ils nous accompagnent',
    'home.section.profile.title' => 'Mon profil',
    'home.section.profile.intro' => 'Veuillez retourner votre bracelet ou utiliser votre carte PASS SANTE',
    'home.section.distrib.title' => 'Réseaux de <b>distribution</b>',
    'home.section.distrib.content1' => '
Le PASS SANTE est disponible au siège de l\'entreprise MCM sis à Marcory Sainte-Thérèse. Vous pouvez nous contacter au 
+22508289006 pour plus d\'infos.
',
    'home.section.distrib.content2' => '
Il est aussi disponible dans nos pharmacies , centres de santé partenaires et franchises
',
    'home.section.pass.title' => 'Obtenir le PASS',
    'home.section.pass.content0' => '
Particuliers ou professionnels, obtenez vos PASS en nous contactant:
<div class="row  small">

  <div class="col-4">

     <h4>Côte d\'Ivoire</h4>

     <div><span class="fa fa-map-marker"></span> MCM- Abidjan, Marcory Sainte-Thérèse</div>

     <div><span class="fa fa-phone"></span> <a href="tel:+22508289006" class="color-white">+22508289006</a>/<a href="tel:+22554631663" class="color-white">+22554631663</a></div>

     <div><span class="fa fa-at"></span> <a href="mailto:dg@mcm-ci.com" class="color-white">dg@mcm-ci.com</a></div>

  </div>

  <div class="col-4">

    <h4>Bénin</h4>

     <div><span class="fa fa-map-marker"></span> JENYSAS -  01BP3885, Cotonou</div>

     <div><span class="fa fa-phone"></span> <a href="tel:+22962000061" class="color-white">+22962000061</a></div>

     <div><span class="fa fa-at"></span> <a href="mailto:contact@passalafia.bj" class="color-white">contact@passalafia.bj</a></div>

  </div>

  <div class="col-4">

    <h4>Togo</h4>

     <div><span class="fa fa-map-marker"></span> TYNEL- Lomé</div>

     <div><span class="fa fa-phone"></span> <a href="tel:+22892442113" class="color-white">+22892442113</a>/<a href="tel:+22898317575" class="color-white">+22898317575</a></div>

     <div><span class="fa fa-at"></span> <a href="mailto:dg@mcm-ci.com" class="color-white">dg@mcm-ci.com</a></div>

  </div>
</div>
',
    'home.section.pass.content1' => 'Vous pouvez utiliser notre formulaire de contact',
    'home.section.contact.title' => '
<span>NOUS</span>CONTACTER
',
    'home.section.partners.title' => 'Nos <b>partenaires</b>',
    'home.section.temoignage.title' => 'Témoignages',
    'home.section.temoignage.temoignage1.content' => '
Le pass Santé est une solution novatrice qui plus qu\'une solution TIC apporte une réelle réponse au problème de désert médical... C\'est Rapide, fiable et pratique.
',
    'home.section.temoignage.temoignage1.author' => 'Anicet M. Dally (Social Media Manager)',
    'home.section.temoignage.temoignage2.content' => '
Avec le Pass Santé, j’ai l’assurance d’être prise en charge en cas d’urgence. Et surtout pour mes enfants, je suis plus rassurée quand je sais qu’ils seront assistés car le Pass parle pour eux.
',
    'home.section.temoignage.temoignage2.author' => 'Bogba Degne Mireille (Assistante de direction)',
    'home.section.temoignage.temoignage3.content' => '
Le Pass Santé est un bijou qui sert de carnet de santé électronique à toute personne le portant dans lequel on peut avoir toutes les informations médicales ; groupe sanguin, et bien d’autres informations capitales pour sa prise en charge efficience et efficace.
',
    'home.section.temoignage.temoignage3.author' => 'Gnanhi Zakpa Richmond (Radiothérapeute)',
    'home.section.temoignage.temoignage4.content' => '
Au-delà de l\'Aspect technique, c\'est la dimension de prise de conscience 
et de transformation de l\'approche de l\'autre vision de la santé en Afrique 
qui m\'a impressioné.
En effet, en plus d\'être un outil fonctionnel, qui améliore la capacité 
de prise en charge des patients, le Pass Santé Mousso, implique une 
coordination de différents service publics et privés, pour son 
utilisation optimale.
',
    'home.section.temoignage.temoignage4.author' => '
Mbépongo Dédy Bilamba (consultant en marketing et communication, Directeur Marketing de 
l\'Africa Web Festival 2016)
',
    'home.section.presentation.part_video' => 'Appuyez sur le bouton pour lire la vidéo',
    'home.section.presentation.section0.title' => 'PRESENTATION',
    'home.section.presentation.section0.content' => '
LE <strong>PASS SANTE MOUSSO</strong> est un bijou (Bracelet, médaillon) et/ou une carte connecté associé à une plateforme en ligne.
Il permet à son propriétaire d\'emporter ses données personnelles et médicales partout avec lui et de les mettre à disposition, le cas échéant, du personnel médical et d\'urgence.
Il est un dossier médical personnalisé numérique, un outil de reponse aux soins d\'urgences.
',
    'home.section.presentation.section1.title' => 'Pourquoi ?',
    'home.section.presentation.section1.description' => 'La solution aborde donc les problématiques suivantes',
    'home.section.presentation.section1.content' => '
<ul>

    <li>

        Détection/dépistage et prise en charge efficace et rapide

    </li>

    <li>

        Évaluer le risque individuel et guider la prise de décision ;

    </li>

    <li>

        Suivre et signaler les cas de transmissions ;

    </li>

    <li>

        Fournir des mises à jour et des alertes fiables aux autorités de santé publique

        ;

    </li>

    <li>

        Facture numérique et déficit énergétique pour des services de soin efficace ;

    </li>

    <li>

        Suivre efficacement l\'évolution de la pandémie par la mise en place de rapports

        statistiques.

    </li>

    <li>

        S\'assurer d\'une large diffusion des mesures face au COVID-19 et pandémies à

        venir

        en

        introduisant des paramètres comme les langues locales.

    </li>
</ul>
',
    'home.section.presentation.section2.title' => 'Fonctionnalités',
    'home.section.presentation.section2.content' => '
<ul>

    <li>

        Sensibilisation et Information au COVID-19

    </li>

    <li>

        Dépistage, cartographie et de géolocalisation des personnes infectées

    </li>

    <li>

        Profil Médical (Groupe Sanguin, Personnes à contacter, Allergies, Vaccins etc.)

    </li>

    <li>

        Gestion des données et statistiques

    </li>

    <li>

        Suivi consultation de vos proches par des comptes associés

    </li>

    <li>

        Alerte

    </li>

    <li>

        Historique Médical

    </li>

    <li>

        Demande d’autorisation de circulation

    </li>

    <li>

        Télémédecine

    </li>

    <li>

        Système de prise en charge financière

    </li>
</ul>
',
    'home.section.presentation.section3.title' => 'Avantages',
    'home.section.presentation.section3.content' => '
<p> Le Pass Santé Plus facilite le travail des professionnels de santé tout en améliorant la prise en charge des patients, d’accélérer le diagnostic grâce aux renseignements supplémentaires qu’il apporte mais aussi et surtout de maintenir une surveillance médicale continue.</p>
',
    'home.section.presentation.section4.title' => 'Cibles',
    'home.section.presentation.section4.n_content' => '
<ul class="list-target">

    <li>

        Femmes, enfants, hommes, malade chronique, etc

    </li>

    <li>

        Personnes atteintes du COVID-19

    </li>

    <li>

        Professionnels de la santé

    </li>

    <li>

        Pharmaciens

    </li>

    <li>

        Organismes

    </li>

    <li>

        Etc.

    </li>
</ul>
',
    'home.section.presentation.section4.content.content0.title' => 'Particulier (Homme, femme, enfants)',
    'home.section.presentation.section4.content.content0.label' => 'Il sert de carnet de santé. Il transporte les informations personnelles pour une prise en charge.',
    'home.section.presentation.section4.content.content1.title' => 'Centres de Santé',
    'home.section.presentation.section4.content.content1.label' => 'Il donne l\'accès à l\'historique médical pour une meilleure prise en charge et évite les erreurs médicales.',
    'home.section.presentation.section4.content.content2.title' => 'Entreprise',
    'home.section.presentation.section4.content.content2.label' => 'Les employés ont l\'assurance d\'être pris en charge en tout temps surtout ceux des BTP, électricité etc..',
    'home.section.presentation.section4.content.content3.title' => 'Etablissement Scolaire',
    'home.section.presentation.section4.content.content3.label' => 'Informe sur l\'état de santé de nos enfants et étudiants et rassure le parent.',
    'home.section.presentation.section4.content.content4.title' => 'Assurance',
    'home.section.presentation.section4.content.content4.label' => '
Propose des services innovants (mise à disposition de données) pour améliorer
l\'état de santé et le suivi des adhérents
',
    'home.section.presentation.section4.content.content5.title' => 'Pharmacie',
    'home.section.presentation.section4.content.content5.label' => 'Accès aux ordonnances médicales et historique médicamenteux des patients',
    'home.section.innovation.titl0' => 'PASS SANTE MOUSSO',
    'home.section.innovation.title' => 'L\'innovation médicale',
    'home.section.innovation.section0.virsion' => '
Notre objectif est de mettre à la disposition des populations, une solution qui ameliore leur prise 
en charge médicale.
',
    'home.section.innovation.section0.pdg' => 'Directrice Générale de MCM',
    'home.section.innovation.section0.titl0' => 'Patients',
    'home.section.innovation.section0.content0' => 'Systeme de gestion des événements importants , Notification sms.',
    'home.section.innovation.section0.content1' => 'Améliorer l\'observance et l\'éducation thérapeuthique.',
    'home.section.innovation.section0.content2' => 'Carnet de santé',
    'home.section.innovation.section0.content3' => 'Objets connectés (Bijoux)',
    'home.section.innovation.section0.title1' => 'PROFESSIONNELS DE SANTÉ',
    'home.section.innovation.section0.content4' => 'Système de gestion du dossier patient.',
    'home.section.innovation.section0.content5' => 'Outils de suivi du patient',
    'home.section.innovation.section0.content6' => 'Gain de temps et d\'efficience.',
    'home.section.innovation.technique.h1' => 'Service technique, toujours à l\'écoute de vos besoins 24H/24!',
    'home.section.innovation.technique.label' => 'pour vous répondre le plus rapidement possible.',
    'home.section.innovation.first_circle.title' => 'Sécurité et anonymisation des données',
    'home.section.innovation.first_circle.content.ligne1' => 'Données médicales sécurisées grâce à mes ID, mon PIN unique et mon MATRICULE.',
    'home.section.innovation.first_circle.content.ligne2' => 'Anonymisation des données  Nous rendons anonymes toutes vos informations',
    'home.section.innovation.first_circle.content.ligne3' => 'Historique médical sécurisé.',
    'home.section.innovation.first_circle.content.ligne4' => 'Anonymisation des données, Notifications des consultations au patient.',
    'home.section.innovation.second_circle.title' => 'Amélioration de la prise en charge médicale',
    'home.section.innovation.second_circle.content.ligne1' => 'Communication entre le patient et les professionnels de santé.',
    'home.section.innovation.second_circle.content.ligne2' => 'Facilite la prise en charge à distance des Patients.',
    'home.section.innovation.second_circle.content.ligne3' => 'Permettre de rester au contact avec le medecin et de faire une consultation en ligne.',
    'home.section.innovation.second_circle.content.ligne4' => 'Eviter des examens à répétition.',
    'home.section.innovation.second_circle.content.ligne5' => 'Permet aux patients et aux professionnels de santé d\'optimiser leurs prise en charge médicale.',
    'home.section.innovation.second_circle.content.ligne6' => 'Surveillance à distance des patients.',
    'home.section.innovation.third_circle.title1' => 'Compte associé',
    'home.section.innovation.third_circle.content.ligne1' => 'Attacher le dossier de l\'enfant à sa mère; tel un carnet mère-enfant pour participer à réduire la mortalité maternelle et infantile.',
    'home.section.innovation.third_circle.title2' => '24/7 Echange avec toute l\'equipe de soins',
    'home.section.parteners.label' => '<span>NOS</span>PARTENAIRES',
    'home.section.parteners.titl0' => 'POUR LE PASS SANTE',
    'home.section.parteners.title' => 'Ils nous font confiance',
    'api.profil_not_found' => 'Profil inexistant',
    'api.medecin_not_found' => 'Medecin avec cet ID inexistant',
    'api.patient_not_found' => 'Patient inexistant',
    'api.access_denied' => 'Vous n\\\'avez pas les permissions pour accéder à cette ressource',
    'api.affection_not_found' => 'Aucune',
    'sensibilisation.section0.title1' => 'Mésure de prevention',
    'sensibilisation.section0.content' => '
La maladie à coronavirus 2019 (COVID-19) est une ‎maladie infectieuse due à un coronavirus découvert ‎récemment. 
‎La majorité des personnes atteintes de la COVID-19 ‎ne ressentiront que des symptômes bénins ou ‎modérés et guériront sans traitement particulier.
',
    'sensibilisation.section1.title1' => 'SENSIBILISATION',
    'sensibilisation.language.title' => 'LANGUE LOCALE',
    'sensibilisation.language.section1.country' => 'Sénégal',
    'sensibilisation.actions.section1.title' => 'Se laver souvent les mains.',
    'sensibilisation.actions.section1.content' => 'Utiliser du savon et ‎de l’eau, ou une solution hydroalcoolique',
    'sensibilisation.actions.section2.title' => 'Maintenir une distance sociale.',
    'sensibilisation.actions.section2.content' => 'Rester à distance de toute personne qui tousse ‎ou éternue. ‎',
    'sensibilisation.actions.section3.title' => 'Eviter de se toucher le visage.',
    'sensibilisation.actions.section3.content' => 'Ne pas toucher ses yeux, son nez ou sa bouche.',
    'sensibilisation.actions.section4.title' => 'Utilisez un masque.',
    'sensibilisation.actions.section4.content' => 'En cas de toux ou d’éternuement, couvrez-vous ‎la bouche et le nez avec le pli du coude ou avec un ‎mouchoir. ‎',
    'sensibilisation.actions.section5.title' => 'Demandez des soins médicaux.',
    'sensibilisation.actions.section5.content' => 'Si vous ne vous sentez pas bien, restez chez vous en cas de doute consultez un médecin ‎ ‎',
    'sensibilisation.actions.section6.title' => 'Restez informé',
    'sensibilisation.actions.section6.content' => 'Informez-vous constamement pour savoir quelles sont les zones où le virus se propage à grande échelle.',
    'rdv.form.specialite' => 'Spécialité',
    'rdv.form.identifiant' => 'ID',
    'rdv.form.pin' => 'PIN',
    'rdv.form.placeholder.specialite' => 'Veuillez choisir une spécialité',
    'rdv.form.libRendezVous' => 'Motif',
    'rdv.form.statutRendezVous' => 'Présence effective du patient/de la patiente',
    'rdv.form.dateRendezVous' => 'Date et heure du RDV',
    'specialite.form.identifiant' => 'Identifiant',
    'specialite.form.nom' => 'Nom',
    'affection.form.nom' => 'Nom',
    'affection.form.details' => 'Détails',
    'affection.form.depistage' => 'Dépistable',
    'allergie.form.nom' => 'Nom',
    'allergie.form.details' => 'Détails',
    'analyse.form.nom' => 'Nom',
    'analyse.form.description' => 'Description',
    'assurance.form.identifiant' => 'Identification',
    'assurance.form.nom' => 'Nom',
    'attribut.form.libAttribut' => 'Attribut',
    'etat.form.libEtat' => 'Libelle',
    'etat.form.typeEtat' => 'Type Etat',
    'groupesanguin.form.code' => 'Code',
    'groupesanguin.form.libelle' => 'Libellé',
    'telephone.form.nom' => 'Nom',
    'telephone.form.sms' => 'Envoyer aussi un SMS de confirmation (Un parent seulement)',
    'telephone.form.numero' => 'Numéro',
    'typeetat.form.libTypeEtat' => 'Libellé',
    'ville.form.nom' => 'Nom de la ville',
    'ville.form.region' => '--- Choisir une région ---',
    'ville.form.pays' => '--- Choisir le pays ---',
    'rules.password.length' => 'au moins %num% caratères',
    'rules.password.special' => 'au moins %num% caractère spécial',
    'rules.password.number' => 'au moins %num% chiffre',
    'rules.password.upper_lower' => 'au moins %num% majuscule et minuscule',
    'rules.username.valid' => 'Caractères alphanumériques et _',
    'codeverifi.form.smsCode' => 'Code de vérification',
    'compteassocie.form.identifiant' => 'Identifiant',
    'compteassocie.form.pin' => 'PIN',
    'compteassocie.form.lien' => '--- Choisir le lien ---',
    'compteassocie.form.associe' => 'Associé',
    'personne.nom_prenom' => 'Nom et Prénoms',
    'personne.form.corporate' => 'Corporate',
    'personne.form.nom' => 'Nom',
    'personne.form.prenom' => 'Prénoms',
    'personne.form.signature' => 'Signature',
    'personne.form.contact' => 'Contact',
    'personne.form.datenaissance' => 'Date de naissance',
    'preference.form.libPreference' => 'Préférence',
    'preference.form.aliasPreference' => 'Alias de votre préférence',
    'preference.form.descPreference' => 'Decription',
    'registration.form.condition' => 'J\'accepte les <a href="#" data-toggle="modal" data-target="#conditions">Termes et conditions</a>',
    'registration.form.message' => 'Veuillez accepter nos conditions avant de continuer',
    'registration.form.pass' => 'J\'ai un PASS',
    'registration.form.contact' => 'N° de Téléphone',
    'utilisateurpersonne.form.username.message' => 'Votre pseudo ne doit contenir que des lettres , des chiffres et le caractère _',
    'utilisateurpersonne.form.username.emptyMessage' => 'Veuillez renseigner votre pseudo',
    'utilisateurpersonne.form.plainPassword.invalid_message' => 'Les mots de passe doivent être identiques.',
    'utilisateurpersonne.form.plainPassword.firtsoption' => 'Mot de passe',
    'utilisateurpersonne.form.plainPassword.second_options' => 'Répétez',
    'patient.warning_gs' => 'Nous vous conseillons de remplir cette information si possible',
    'patient.form.identifiant' => 'Identifiant',
    'patient.form.pin' => 'Code PIN',
    'patient.form.poids' => 'Poids',
    'patient.form.taille' => 'Taille',
    'patient.form.nombreEnfant' => 'Nombre d\'enfant',
    'patient.form.ethnie' => 'Ethnie',
    'patient.form.matricule' => 'Matricule',
    'patient.form.regime' => 'Régime',
    'patient.form.adresse' => 'Adresse Postale',
    'patient.form.lieuhabitation' => 'Lieu d\'habitation',
    'patient.form.profession' => 'Profession',
    'patient.form.societe' => 'Entreprise/Ecole',
    'patient.form.nationalite' => 'Nationalité',
    'patient.form.pays' => 'Pays',
    'patient.form.region' => 'Région d\'origine',
    'patient.form.ville' => 'Ville',
    'patient.form.religion' => 'Religion',
    'patient.form.statut' => 'Statut Drépano',
    'patient.form.sexe.label' => 'Genre',
    'patient.form.sexe.male.choice' => 'M',
    'patient.form.sexe.male.label' => 'Masculin',
    'patient.form.sexe.female.choice' => 'F',
    'patient.form.sexe.female.label' => 'Feminin',
    'patient.form.groupeSanguin' => 'Groupe Sanguin',
    'patient.form.telephones' => 'Personne à contacter',
    'patient.form.medecins' => 'Medecins Traitants',
    'patient.form.associes' => 'Comptes Associés',
    'patient.form.allergies' => 'Allergies',
    'patient.form.affections' => 'Affections',
    'patient.form.ligneAssurances' => 'Assurances',
    'patient.form.vaccinations' => 'Vaccins',
    'patient.form.traitements' => 'Traitements suivis',
    'patient.form.lien' => 'Lien de parenté',
    'patient.form.resent_login' => 'Renvoyer les données de connexion',
    'patient.form.condition' => 'En cliquant, vous donnez l\'autorisation à PASS SANTE de rendre vos informations publiques',
    'pharmacie.form.libellePharmacie' => 'Officine',
    'pharmacie.form.info.nomResponsable' => 'Pharmacien',
    'pharmacie.form.info.libCommune' => 'Commune',
    'pharmacie.form.info.localisationPharmacie' => 'Localisation',
    'pharmacie.form.info.contacts' => 'Contact',
    'pharmacie.form.info.ville' => 'Ville',
    'site.form.url' => 'Site WEB',
    'site.form.libelle' => 'Libellé',
    'site.form.statut' => 'API',
    'site.form.pays' => 'Pays',
    'site.form.message' => 'Veuillez renseigner un fichier',
    'admission.form.date' => 'Date',
    'admission.form.message' => 'Veuillez renseigner la date',
    'admission.form.patient.nom' => 'Nom',
    'admission.form.patient.prenoms' => 'Prénoms',
    'admission.form.patient.pin' => 'PIN',
    'admission.form.patient.identifiant' => 'ID',
    'admission.form.prestation' => 'Prestation',
    'medecin.form.personne.nom' => 'Nom',
    'medecin.form.personne.presnoms' => 'Prénoms',
    'medecin.form.personne.username' => 'Nom Utilisateur',
    'medecin.form.hopital' => 'Hôpital',
    'ordonnance.back' => 'Retour',
    'ordonnance.allergie' => 'Allergies',
    'ordonnance.traitementTilte' => 'Traitement suivis',
    'consultation.form.dateConsultation' => 'Date',
    'consultation.form.specialite.label' => 'Spécialité',
    'consultation.form.specialite.empty_value' => '--- Choisir une specialité ---',
    'consultation.form.motif' => 'Modif',
    'consultation.form.histoire' => 'Histoire de la maladie',
    'consultation.form.message' => 'Veuillez renseigner le motif',
    'consultation.form.diagnostique' => 'Hypothèse Diagnostic',
    'consultation.form.poids' => 'Poids(kg)',
    'consultation.form.medecin.message' => 'Veuillez renseigner le medecin',
    'consultation.form.medecin.hopital' => 'Hôpital',
    'consultation.form.medecin.nom' => 'Medecin',
    'consultation.form.medecin.prenoms' => 'Medecin',
    'consultation.form.diagnostiqueFinal' => 'Diagnostic Retenu',
    'consultation.form.statut' => 'Statut',
    'consultation.form.refConsultation' => 'Référence',
    'consultation.form.temperature' => 'Température T(°C)',
    'consultation.form.tension' => 'Tension',
    'consultation.form.observation' => 'Compte Rendu Médical',
    'consultation.form.assurance.nom' => 'Assurance',
    'consultation.form.assurance.empty_value' => '--- Choisir une assurance ---',
    'consultation.form.hospitalisation' => 'Demande d\\\'hospitalisation',
    'consultation.form.info.tilte' => 'Informations Patient',
    'consultation.form.info.medecin' => 'Medecin Traitant',
    'consultation.form.autreinfo' => 'Autres Informations',
    'consultation.form.listeDianostic' => 'Diagnostic (Liste Affections)',
    'consultation.form.listeMedicament' => 'Liste Médicaments',
    'consultation.form.affection' => 'Affection',
    'consultation.form.medicament.nom' => 'Médicaments',
    'consultation.form.medicament.prix' => 'Prix',
    'consultation.form.medicament.commentaire' => 'Commentaire',
    'consultation.form.medicament.pesologie' => 'Posologie',
    'consultation.form.medicament.detail' => 'Détail',
    'consultation.form.analyse.label' => 'Liste Analyses',
    'consultation.form.analyse.nom' => 'Analyse',
    'consultation.form.analyse.description' => 'Description',
    'consultation.form.medecinConseil' => 'Action Medecin conseil',
    'corporate.form.raisonSociale' => 'Raison sociale',
    'corporate.form.contacts' => 'Contacts',
    'corporate.form.email' => 'Email',
    'hopital.form.nom' => 'Nom',
    'hopital.form.ville' => 'Ville',
    'hopital.form.pays' => 'Pays',
    'hopital.form.info.nomResponsable' => 'Responsable',
    'hopital.form.info.emailHopital' => 'Email',
    'hopital.form.info.localisationHopital' => 'Localisation',
    'hopital.form.info.contacts' => 'Contact',
    'hopital.form.info.fax' => 'Fax',
    'hopital.form.info.pointVente' => 'Point de Vente',
    'medicament.form.nom' => 'Nom',
    'region.form.nom' => 'Nom',
    'utilisateur.form.username' => 'Pseudo',
    'utilisateur.form.email' => 'Email',
    'pass.form.id' => 'ID',
    'pass.form.identifiant' => 'Indentifiant',
    'pass.form.pin' => 'Code PIN',
    'pass.form.patient' => 'Patient',
    'pass.form.actif' => 'Actif',
    'pass.form.dateCreation' => 'Date de création',
    'export.form.file' => 'Fichier',
    'btn.save' => 'Enregistrer',
    'infohopital.form.contacts' => 'Contacts',
    'infohopital.form.localisationHopital' => 'Localisation',
    'infohopital.form.nomResponsable' => 'Responsable',
    'infohopital.form.logoHopital' => 'Logo',
    'infohopital.form.pointVente' => 'Point de vente',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Précédent',
    'label_next' => 'Suivant',
  ),
  'admin' => 
  array (
    'Légende' => 'Légende',
    'Tableau de bord' => 'Tableau de bord',
    'RDV et Rappels de vaccins' => 'RDV et Rappels de vaccins',
    'username' => 'Pseudo',
    'email' => 'Adresse e-mail',
    'password' => 'Mot de passe',
    'role' => 'Rôle(s)',
    'rdv.new' => 'Nouveau RDV',
    'rdv.search' => 'Rechercher un RDV',
    'rdv.details' => 'Détails',
    'rdv.cancelled' => 'RDV annulé',
    'rdv.patient' => 'Présence effective du patient ou de la patiente',
    'rdv.no_delete' => 'Impossible de modifier ce RDV. Il a été soit annulé ou déjà été validé',
    'btn.validate' => 'Valider',
    'btn.back' => 'Retour',
    'btn.new' => 'Nouveau',
    'btn.new_label' => 'Nouveau %label%',
    'btn.add_label' => 'Ajouter %label%',
    'btn.edit' => 'Modifier',
    'btn.cancel' => 'Annuler',
    'btn.emergency' => 'Signaler une urgence',
    'btn.suivi_constante' => 'Suivi de constantes',
    'btn.user_account' => 'Mon compte utilisateur',
    'btn.profile_medicale' => 'Profil Médical',
    'btn.rappel_vaccin' => 'Rappels de vaccins',
    'btn.add_linked_account' => 'Nouveau compte lié',
    'btn.add_line' => 'Ajouter une ligne',
    'btn.export_file' => 'Exporter un fichier',
    'btn.import_file' => 'Importer un fichier',
    'btn.generate_pass' => 'Générer des PASS',
    'btn.patient_edit' => 'Modification des infos',
    'btn.patient_photo' => 'Gestion des photos',
    'grid.submit_action' => 'Valider',
    'admin.welcome' => 'Bienvenue dans votre espace utilisateur',
    'admin.is_logged_in' => 'Connecté',
    'admin.alert_medicament' => 'Des médicaments de substitution ont été proposés sur %sub%',
    'admin.total_waiting_consultation' => '<a href="%link%">%total_sub% consultation(s)</a>',
    'admin.no_data' => 'Aucune donnée',
    'admin.last_measures' => 'Dernières constantes',
    'admin.required_fields' => 'Tous les champs sont requis suivis de * sont requis',
    'admin.row_action' => 'Actions',
    'admin.my_history' => 'Mon historique',
    'admin.patient_charge' => 'Liste des patients pris en charge',
    'registration.title' => 'Création de compte',
    'registration.has_account' => 'Je suis déjà membre',
    'registration.registration_text' => 'Création de compte patient',
    'registration.terms' => 'J\'accepte les <a href="%link%">termes et conditions</a>',
    'registration.form.placeholder.username' => 'Pseudo',
    'registration.form.placeholder.email' => 'Adresse mail',
    'registration.form.placeholder.contact' => 'Numéro de téléphone',
    'registration.form.placeholder.plainPassword.first' => 'Mot de passe',
    'registration.form.placeholder.plainPassword.second' => 'Retapez le mot de passe',
    'security.password' => 'Mot de passe oublié',
    'security.login_text' => 'Connectez-vous à votre espace',
    'security.title' => 'Connexion',
    'security.form.placeholder._username' => 'Login',
    'security.form.placeholder._password' => 'Mot de passe',
    'consultation.new' => 'Nouvelle consultation',
    'consultation.edit' => 'Modifier Consultation',
    'consultation.info' => NULL,
    'consultation.historique.infoPatient' => 'Information Patient',
    'consultation.historique.tilte' => 'Historique de consultations',
    'consultation.patient_waiting' => 'Patient(e)s en attente de consultation',
    'consultation.no_patient_waiting' => 'Aucun patient dans la file pour le',
    'profile.details' => 'Détails utilisateur',
    'profile.change_password' => 'Modification du mot de passe',
    'profile.edit' => 'Modifier',
    'profile.edit_title' => 'Profil utilisateur',
    'profile.name' => 'Nom',
    'profile.surname' => 'Prénom(s)',
    'profile.contact' => 'Numéro de téléphone',
    'profile.login_settings' => 'Paramètres de connexion',
    'profile.user_id' => 'Informations générales',
    'profile.age' => 'Âge',
    'profile.years' => '%age% ans',
    'profile.user_info' => 'Informations sur l\'utilisateur',
    'patient.info_title' => 'Compte PSM',
    'patient.list_title' => 'Liste des patients',
    'patient.vaccinations.title' => 'Vaccins',
    'patient.vaccinations.name' => 'Vaccin',
    'patient.vaccinations.details' => 'Détails',
    'patient.vaccinations.date' => 'Date',
    'patient.vaccinations.rappel' => 'Rappel',
    'patient.traitements.title' => 'Traitements suivis',
    'patient.traitements.libelle' => 'Traitement',
    'patient.traitements.date' => 'Debut',
    'patient.traitements.fin' => 'Fin',
    'patient.affections.title' => 'Affections',
    'patient.affections.affection' => 'Affection',
    'patient.affections.commentaire' => 'Commentaire',
    'patient.affections.date' => 'Date',
    'patient.allergies.title' => 'Allergies',
    'patient.allergies.allergie' => 'Allergie',
    'patient.allergies.commentaire' => 'Commentaire',
    'patient.assurances.title' => 'Assurances',
    'patient.assurances.assurance' => 'Assurance',
    'patient.assurances.numero' => 'Numéro d\'Assuré',
    'patient.assurances.taux' => '% de couverture',
    'patient.medecins.title' => 'Medecins Traitants',
    'patient.medecins.medecin' => 'Medecin',
    'patient.medecins.specialite' => 'Spécialité',
    'patient.medecins.contact' => 'Contact',
    'patient.medecins.hopital' => 'Hôpital',
    'pass.title' => 'Liste des PASS',
    'pass.export' => 'Exporter les données vers EXCEL',
    'pass.import' => 'Importer un fichier',
    'constantes.new' => 'Nouveau',
    'constantes.details' => 'Détails',
  ),
  'consultation' => 
  array (
  ),
  'menu' => 
  array (
    'menu.title' => 'MENU PRINCIPAL',
    'menu.logout' => 'Déconnexion',
    'menu.dashboard' => 'Tableau de bord',
    'menu.site_distrib' => 'Réseaux de soins',
    'menu.site_home' => 'Retour au site',
    'menu.user_account' => 'Accès PSM',
    'menu.admission.title' => 'Admission',
    'menu.rdv.title' => 'Rendez-vous',
    'menu.gestion.title' => 'Gestion',
    'menu.gestion.faq' => 'FAQ',
    'menu.gestion.sms' => 'Campagnes SMS',
    'menu.gestion.pharmacies' => 'Pharmacies',
    'menu.gestion.corporate' => 'Corporate',
    'menu.parametre.title' => 'Paramètres',
    'menu.parametre.affections' => 'Affections',
    'menu.parametre.hopitaux' => 'Hôpitaux',
    'menu.parametre.specialites' => 'Spécialités',
    'menu.parametre.assurances' => 'Assurances',
    'menu.parametre.villes' => 'Villes',
    'menu.parametre.religions' => 'Religions',
    'menu.parametre.pays' => 'Pays',
    'menu.parametre.nationalites' => 'Nationalités',
    'menu.parametre.groupesanguin' => 'Groupes Sanguins',
    'menu.parametre.regions' => 'Régions',
    'menu.configuration.title' => 'Configuration',
    'menu.configuration.utilisateurs' => 'Comptes Utilisateurs',
    'menu.configuration.patients' => 'Comptes Patients',
    'menu.configuration.pass' => 'Gestion des PASS',
    'menu.configuration.photo' => 'Gestion des Photos',
    'menu.stats.title' => 'Statistiques',
    'menu.stats.global' => 'Stats globales',
    'menu.patient.title' => 'Compte PSM',
    'menu.patient.list' => 'Patients',
    'menu.patient.new' => 'Nouveau',
    'menu.patient.associe' => 'Mes comptes associés',
    'menu.patient.constantes' => 'Suivi constantes',
    'menu.patient.evolution' => 'Suivi/Evolutios',
    'menu.patient.info' => 'Compte PSM',
    'menu.patient.historique_medical' => 'Historique Médical',
    'menu.patient.rdv' => 'Mes Rendez-vous',
    'menu.patient.ordonnances' => 'Ordonnances',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
