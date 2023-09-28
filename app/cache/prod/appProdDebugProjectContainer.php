<?php

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 */
class appProdDebugProjectContainer extends Container
{
    private $parameters;
    private $targetDirs = array();

    public function __construct()
    {
        $dir = __DIR__;
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = dirname($dir);
        }
        $this->parameters = $this->getDefaultParameters();

        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'acme_api.event.jwt_auth_listener' => 'getAcmeApi_Event_JwtAuthListenerService',
            'acme_api.event.jwt_created_listener' => 'getAcmeApi_Event_JwtCreatedListenerService',
            'acme_api.event.jwt_decoded_listener' => 'getAcmeApi_Event_JwtDecodedListenerService',
            'annotation_reader' => 'getAnnotationReaderService',
            'app.action_logger' => 'getApp_ActionLoggerService',
            'app.api_upload' => 'getApp_ApiUploadService',
            'app.assurance_constraint' => 'getApp_AssuranceConstraintService',
            'app.commande_pack_type' => 'getApp_CommandePackTypeService',
            'app.constance_type' => 'getApp_ConstanceTypeService',
            'app.consultation_type' => 'getApp_ConsultationTypeService',
            'app.contains_pass_client' => 'getApp_ContainsPassClientService',
            'app.contains_pass_validator' => 'getApp_ContainsPassValidatorService',
            'app.corporate_type' => 'getApp_CorporateTypeService',
            'app.custom_twig_extension' => 'getApp_CustomTwigExtensionService',
            'app.doctrine_logolistener' => 'getApp_DoctrineLogolistenerService',
            'app.fiche_type' => 'getApp_FicheTypeService',
            'app.file_exporter' => 'getApp_FileExporterService',
            'app.form.change_password' => 'getApp_Form_ChangePasswordService',
            'app.form.profile_form' => 'getApp_Form_ProfileFormService',
            'app.form.registration' => 'getApp_Form_RegistrationService',
            'app.form.reset_password' => 'getApp_Form_ResetPasswordService',
            'app.form_builder' => 'getApp_FormBuilderService',
            'app.form_error' => 'getApp_FormErrorService',
            'app.form_error_serializer' => 'getApp_FormErrorSerializerService',
            'app.locale_listener' => 'getApp_LocaleListenerService',
            'app.medecin_type' => 'getApp_MedecinTypeService',
            'app.mtarget_sms' => 'getApp_MtargetSmsService',
            'app.osms' => 'getApp_OsmsService',
            'app.ps_sms' => 'getApp_PsSmsService',
            'app.psm_logo_uploader' => 'getApp_PsmLogoUploaderService',
            'app.psm_util' => 'getApp_PsmUtilService',
            'app.rdv_date_constraint' => 'getApp_RdvDateConstraintService',
            'app.rdv_type' => 'getApp_RdvTypeService',
            'app.reminder' => 'getApp_ReminderService',
            'app.textarea_type_extension' => 'getApp_TextareaTypeExtensionService',
            'app.utilisateur_type' => 'getApp_UtilisateurTypeService',
            'app.validator.unique_value_in_entity' => 'getApp_Validator_UniqueValueInEntityService',
            'apy_grid.column.array' => 'getApyGrid_Column_ArrayService',
            'apy_grid.column.blank' => 'getApyGrid_Column_BlankService',
            'apy_grid.column.boolean' => 'getApyGrid_Column_BooleanService',
            'apy_grid.column.date' => 'getApyGrid_Column_DateService',
            'apy_grid.column.date_time' => 'getApyGrid_Column_DateTimeService',
            'apy_grid.column.join' => 'getApyGrid_Column_JoinService',
            'apy_grid.column.number' => 'getApyGrid_Column_NumberService',
            'apy_grid.column.rank' => 'getApyGrid_Column_RankService',
            'apy_grid.column.text' => 'getApyGrid_Column_TextService',
            'apy_grid.column.time' => 'getApyGrid_Column_TimeService',
            'apy_grid.factory' => 'getApyGrid_FactoryService',
            'apy_grid.registry' => 'getApyGrid_RegistryService',
            'apy_grid.type.grid' => 'getApyGrid_Type_GridService',
            'assets._version__default' => 'getAssets_VersionDefaultService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'avanzu_admin_theme.context_listener' => 'getAvanzuAdminTheme_ContextListenerService',
            'avanzu_admin_theme.exception_controller' => 'getAvanzuAdminTheme_ExceptionControllerService',
            'avanzu_admin_theme.setup_theme_listener' => 'getAvanzuAdminTheme_SetupThemeListenerService',
            'avanzu_admin_theme.theme_manager' => 'getAvanzuAdminTheme_ThemeManagerService',
            'avanzu_admin_theme.widget_extension.class' => 'getAvanzuAdminTheme_WidgetExtension_ClassService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.server_params' => 'getForm_ServerParamsService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.range' => 'getForm_Type_RangeService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.transformation_failure_handling' => 'getForm_TypeExtension_Form_TransformationFailureHandlingService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos\\restbundle\\view\\viewhandlerinterface' => 'getFos_Restbundle_View_ViewhandlerinterfaceService',
            'fos_js_routing.controller' => 'getFosJsRouting_ControllerService',
            'fos_js_routing.dump_command' => 'getFosJsRouting_DumpCommandService',
            'fos_js_routing.extractor' => 'getFosJsRouting_ExtractorService',
            'fos_js_routing.router_debug_exposed_command' => 'getFosJsRouting_RouterDebugExposedCommandService',
            'fos_js_routing.serializer' => 'getFosJsRouting_SerializerService',
            'fos_rest.body_listener' => 'getFosRest_BodyListenerService',
            'fos_rest.decoder.json' => 'getFosRest_Decoder_JsonService',
            'fos_rest.decoder.jsontoform' => 'getFosRest_Decoder_JsontoformService',
            'fos_rest.decoder.xml' => 'getFosRest_Decoder_XmlService',
            'fos_rest.decoder_provider' => 'getFosRest_DecoderProviderService',
            'fos_rest.exception.codes_map' => 'getFosRest_Exception_CodesMapService',
            'fos_rest.exception.controller' => 'getFosRest_Exception_ControllerService',
            'fos_rest.exception.twig_controller' => 'getFosRest_Exception_TwigControllerService',
            'fos_rest.exception_listener' => 'getFosRest_ExceptionListenerService',
            'fos_rest.form.extension.csrf_disable' => 'getFosRest_Form_Extension_CsrfDisableService',
            'fos_rest.format_listener' => 'getFosRest_FormatListenerService',
            'fos_rest.format_negotiator' => 'getFosRest_FormatNegotiatorService',
            'fos_rest.inflector' => 'getFosRest_InflectorService',
            'fos_rest.normalizer.camel_keys' => 'getFosRest_Normalizer_CamelKeysService',
            'fos_rest.normalizer.camel_keys_with_leading_underscore' => 'getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService',
            'fos_rest.param_fetcher_listener' => 'getFosRest_ParamFetcherListenerService',
            'fos_rest.request.param_fetcher' => 'getFosRest_Request_ParamFetcherService',
            'fos_rest.request.param_fetcher.reader' => 'getFosRest_Request_ParamFetcher_ReaderService',
            'fos_rest.serializer' => 'getFosRest_SerializerService',
            'fos_rest.serializer.exception_normalizer.jms' => 'getFosRest_Serializer_ExceptionNormalizer_JmsService',
            'fos_rest.serializer.form_error_handler' => 'getFosRest_Serializer_FormErrorHandlerService',
            'fos_rest.serializer.jms_handler_registry.inner' => 'getFosRest_Serializer_JmsHandlerRegistry_InnerService',
            'fos_rest.versioning.listener' => 'getFosRest_Versioning_ListenerService',
            'fos_rest.view_response_listener' => 'getFosRest_ViewResponseListenerService',
            'fos_user.change_password.controller' => 'getFosUser_ChangePassword_ControllerService',
            'fos_user.change_password.form.factory' => 'getFosUser_ChangePassword_Form_FactoryService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.command.activate_user' => 'getFosUser_Command_ActivateUserService',
            'fos_user.command.change_password' => 'getFosUser_Command_ChangePasswordService',
            'fos_user.command.create_user' => 'getFosUser_Command_CreateUserService',
            'fos_user.command.deactivate_user' => 'getFosUser_Command_DeactivateUserService',
            'fos_user.command.demote_user' => 'getFosUser_Command_DemoteUserService',
            'fos_user.command.promote_user' => 'getFosUser_Command_PromoteUserService',
            'fos_user.group.controller' => 'getFosUser_Group_ControllerService',
            'fos_user.group.form.factory' => 'getFosUser_Group_Form_FactoryService',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.listener.authentication' => 'getFosUser_Listener_AuthenticationService',
            'fos_user.listener.flash' => 'getFosUser_Listener_FlashService',
            'fos_user.listener.resetting' => 'getFosUser_Listener_ResettingService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.object_manager' => 'getFosUser_ObjectManagerService',
            'fos_user.profile.controller' => 'getFosUser_Profile_ControllerService',
            'fos_user.profile.form.factory' => 'getFosUser_Profile_Form_FactoryService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.controller' => 'getFosUser_Registration_ControllerService',
            'fos_user.registration.form.factory' => 'getFosUser_Registration_Form_FactoryService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.controller' => 'getFosUser_Resetting_ControllerService',
            'fos_user.resetting.form.factory' => 'getFosUser_Resetting_Form_FactoryService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.controller' => 'getFosUser_Security_ControllerService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.user_provider.username' => 'getFosUser_UserProvider_UsernameService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.canonical_fields_updater' => 'getFosUser_Util_CanonicalFieldsUpdaterService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.password_updater' => 'getFosUser_Util_PasswordUpdaterService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'grid' => 'getGridService',
            'grid.manager' => 'getGrid_ManagerService',
            'grid.mapping.manager' => 'getGrid_Mapping_ManagerService',
            'grid.metadata.driver.annotation' => 'getGrid_Metadata_Driver_AnnotationService',
            'html2pdf_factory' => 'getHtml2pdfFactoryService',
            'http_kernel' => 'getHttpKernelService',
            'ivory.base64_file.form.extension' => 'getIvory_Base64File_Form_ExtensionService',
            'jms_i18n_routing.cookie_setting_listener' => 'getJmsI18nRouting_CookieSettingListenerService',
            'jms_i18n_routing.loader' => 'getJmsI18nRouting_LoaderService',
            'jms_i18n_routing.route_exclusion_strategy' => 'getJmsI18nRouting_RouteExclusionStrategyService',
            'jms_serializer' => 'getJmsSerializerService',
            'jms_serializer.accessor_strategy' => 'getJmsSerializer_AccessorStrategyService',
            'jms_serializer.array_collection_handler' => 'getJmsSerializer_ArrayCollectionHandlerService',
            'jms_serializer.camel_case_naming_strategy' => 'getJmsSerializer_CamelCaseNamingStrategyService',
            'jms_serializer.constraint_violation_handler' => 'getJmsSerializer_ConstraintViolationHandlerService',
            'jms_serializer.datetime_handler' => 'getJmsSerializer_DatetimeHandlerService',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService',
            'jms_serializer.doctrine_proxy_subscriber' => 'getJmsSerializer_DoctrineProxySubscriberService',
            'jms_serializer.expression_evaluator' => 'getJmsSerializer_ExpressionEvaluatorService',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService',
            'jms_serializer.json_deserialization_visitor' => 'getJmsSerializer_JsonDeserializationVisitorService',
            'jms_serializer.json_serialization_visitor' => 'getJmsSerializer_JsonSerializationVisitorService',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService',
            'jms_serializer.naming_strategy' => 'getJmsSerializer_NamingStrategyService',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService',
            'jms_serializer.php_collection_handler' => 'getJmsSerializer_PhpCollectionHandlerService',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService',
            'jms_serializer.stopwatch_subscriber' => 'getJmsSerializer_StopwatchSubscriberService',
            'jms_serializer.templating.helper.serializer' => 'getJmsSerializer_Templating_Helper_SerializerService',
            'jms_serializer.unserialize_object_constructor' => 'getJmsSerializer_UnserializeObjectConstructorService',
            'jms_serializer.xml_deserialization_visitor' => 'getJmsSerializer_XmlDeserializationVisitorService',
            'jms_serializer.xml_serialization_visitor' => 'getJmsSerializer_XmlSerializationVisitorService',
            'jms_serializer.yaml_serialization_visitor' => 'getJmsSerializer_YamlSerializationVisitorService',
            'jms_translation.config_factory' => 'getJmsTranslation_ConfigFactoryService',
            'jms_translation.controller.api_controller' => 'getJmsTranslation_Controller_ApiControllerService',
            'jms_translation.controller.translate_controller' => 'getJmsTranslation_Controller_TranslateControllerService',
            'jms_translation.file_source_factory' => 'getJmsTranslation_FileSourceFactoryService',
            'jms_translation.loader_manager' => 'getJmsTranslation_LoaderManagerService',
            'jms_translation.twig_extension' => 'getJmsTranslation_TwigExtensionService',
            'jms_translation.updater' => 'getJmsTranslation_UpdaterService',
            'kernel' => 'getKernelService',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService',
            'knp_paginator' => 'getKnpPaginatorService',
            'knp_paginator.helper.processor' => 'getKnpPaginator_Helper_ProcessorService',
            'knp_paginator.subscriber.filtration' => 'getKnpPaginator_Subscriber_FiltrationService',
            'knp_paginator.subscriber.paginate' => 'getKnpPaginator_Subscriber_PaginateService',
            'knp_paginator.subscriber.sliding_pagination' => 'getKnpPaginator_Subscriber_SlidingPaginationService',
            'knp_paginator.subscriber.sortable' => 'getKnpPaginator_Subscriber_SortableService',
            'knp_paginator.twig.extension.pagination' => 'getKnpPaginator_Twig_Extension_PaginationService',
            'lexik\\bundle\\jwtauthenticationbundle\\services\\jwsprovider\\jwsproviderinterface' => 'getLexik_Bundle_Jwtauthenticationbundle_Services_Jwsprovider_JwsproviderinterfaceService',
            'lexik\\bundle\\jwtauthenticationbundle\\tokenextractor\\tokenextractorinterface' => 'getLexik_Bundle_Jwtauthenticationbundle_Tokenextractor_TokenextractorinterfaceService',
            'lexik_jwt_authentication.check_config_command' => 'getLexikJwtAuthentication_CheckConfigCommandService',
            'lexik_jwt_authentication.encoder.default' => 'getLexikJwtAuthentication_Encoder_DefaultService',
            'lexik_jwt_authentication.encoder.lcobucci' => 'getLexikJwtAuthentication_Encoder_LcobucciService',
            'lexik_jwt_authentication.extractor.authorization_header_extractor' => 'getLexikJwtAuthentication_Extractor_AuthorizationHeaderExtractorService',
            'lexik_jwt_authentication.extractor.cookie_extractor' => 'getLexikJwtAuthentication_Extractor_CookieExtractorService',
            'lexik_jwt_authentication.extractor.query_parameter_extractor' => 'getLexikJwtAuthentication_Extractor_QueryParameterExtractorService',
            'lexik_jwt_authentication.handler.authentication_failure' => 'getLexikJwtAuthentication_Handler_AuthenticationFailureService',
            'lexik_jwt_authentication.handler.authentication_success' => 'getLexikJwtAuthentication_Handler_AuthenticationSuccessService',
            'lexik_jwt_authentication.jwt_manager' => 'getLexikJwtAuthentication_JwtManagerService',
            'lexik_jwt_authentication.key_loader' => 'getLexikJwtAuthentication_KeyLoaderService',
            'lexik_jwt_authentication.security.guard.jwt_token_authenticator' => 'getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.nested' => 'getMonolog_Handler_NestedService',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'my_admin_bundle.breadcrumb_listener' => 'getMyAdminBundle_BreadcrumbListenerService',
            'my_admin_bundle.menu_listener' => 'getMyAdminBundle_MenuListenerService',
            'my_admin_bundle.notification_list_listener' => 'getMyAdminBundle_NotificationListListenerService',
            'my_admin_bundle.show_user_listener' => 'getMyAdminBundle_ShowUserListenerService',
            'my_admin_bundle.task_list_listener' => 'getMyAdminBundle_TaskListListenerService',
            'nelmio_cors.cors_listener' => 'getNelmioCors_CorsListenerService',
            'nelmio_cors.options_provider.config' => 'getNelmioCors_OptionsProvider_ConfigService',
            'ob_highcharts.twig.highcharts_extension' => 'getObHighcharts_Twig_HighchartsExtensionService',
            'phpoffice.spreadsheet' => 'getPhpoffice_SpreadsheetService',
            'property_accessor' => 'getPropertyAccessorService',
            'psm.registration_event' => 'getPsm_RegistrationEventService',
            'psm_d_post_connect' => 'getPsmDPostConnectService',
            'psm_logoutlistener' => 'getPsmLogoutlistenerService',
            'psm_profile_controller' => 'getPsmProfileControllerService',
            'redirect.after.login' => 'getRedirect_After_LoginService',
            'request' => 'getRequestService',
            'request_stack' => 'getRequestStackService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'sc_datetimepicker.form.type.datetime' => 'getScDatetimepicker_Form_Type_DatetimeService',
            'sc_datetimepicker.twig.extension.form' => 'getScDatetimepicker_Twig_Extension_FormService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.rememberme.services.simplehash.main' => 'getSecurity_Authentication_Rememberme_Services_Simplehash_MainService',
            'security.authentication.session_strategy.cnrao' => 'getSecurity_Authentication_SessionStrategy_CnraoService',
            'security.authentication.session_strategy.login' => 'getSecurity_Authentication_SessionStrategy_LoginService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.cnrao' => 'getSecurity_Firewall_Map_Context_CnraoService',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService',
            'security.firewall.map.context.login' => 'getSecurity_Firewall_Map_Context_LoginService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.firewall.map.context.mobile_login' => 'getSecurity_Firewall_Map_Context_MobileLoginService',
            'security.firewall.map.context.rest' => 'getSecurity_Firewall_Map_Context_RestService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout.handler.csrf_token_clearing' => 'getSecurity_Logout_Handler_CsrfTokenClearingService',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'security.user_checker.login' => 'getSecurity_UserChecker_LoginService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.json' => 'getTranslation_Loader_JsonService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.form.renderer' => 'getTwig_Form_RendererService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'validator.email' => 'getValidator_EmailService',
            'validator.expression' => 'getValidator_ExpressionService',
            'visitor_counters_twig_extension' => 'getVisitorCountersTwigExtensionService',
        );
        $this->aliases = array(
            'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
            'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
            'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
            'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
            'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.fos_jsroutingbundle_command_dumpcommand' => 'fos_js_routing.dump_command',
            'console.command.fos_jsroutingbundle_command_routerdebugexposedcommand' => 'fos_js_routing.router_debug_exposed_command',
            'console.command.fos_userbundle_command_activateusercommand' => 'fos_user.command.activate_user',
            'console.command.fos_userbundle_command_changepasswordcommand' => 'fos_user.command.change_password',
            'console.command.fos_userbundle_command_createusercommand' => 'fos_user.command.create_user',
            'console.command.fos_userbundle_command_deactivateusercommand' => 'fos_user.command.deactivate_user',
            'console.command.fos_userbundle_command_demoteusercommand' => 'fos_user.command.demote_user',
            'console.command.fos_userbundle_command_promoteusercommand' => 'fos_user.command.promote_user',
            'console.command.lexik_bundle_jwtauthenticationbundle_command_checkconfigcommand' => 'lexik_jwt_authentication.check_config_command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'fos\\restbundle\\request\\paramfetcherinterface' => 'fos_rest.request.param_fetcher',
            'fos_rest.router' => 'router',
            'fos_rest.serializer.jms_handler_registry' => 'jms_serializer.handler_registry',
            'fos_rest.templating' => 'templating',
            'fos_rest.view_handler' => 'fos\\restbundle\\view\\viewhandlerinterface',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'jms_serializer.form_error_handler' => 'fos_rest.serializer.form_error_handler',
            'knp\\component\\pager\\paginatorinterface' => 'knp_paginator',
            'lexik\\bundle\\jwtauthenticationbundle\\encoder\\jwtencoderinterface' => 'lexik_jwt_authentication.encoder.lcobucci',
            'lexik\\bundle\\jwtauthenticationbundle\\security\\http\\authentication\\authenticationfailurehandler' => 'lexik_jwt_authentication.handler.authentication_failure',
            'lexik\\bundle\\jwtauthenticationbundle\\security\\http\\authentication\\authenticationsuccesshandler' => 'lexik_jwt_authentication.handler.authentication_success',
            'lexik\\bundle\\jwtauthenticationbundle\\services\\jwttokeninterface' => 'lexik_jwt_authentication.jwt_manager',
            'lexik\\bundle\\jwtauthenticationbundle\\services\\jwttokenmanagerinterface' => 'lexik_jwt_authentication.jwt_manager',
            'lexik_jwt_authentication.encoder' => 'lexik_jwt_authentication.encoder.lcobucci',
            'lexik_jwt_authentication.jwt_token_authenticator' => 'lexik_jwt_authentication.security.guard.jwt_token_authenticator',
            'mailer' => 'swiftmailer.mailer.default',
            'security.authentication.session_strategy.main' => 'security.authentication.session_strategy.cnrao',
            'security.authentication.session_strategy.mobile_login' => 'security.authentication.session_strategy.login',
            'security.authentication.session_strategy.rest' => 'security.authentication.session_strategy.login',
            'security.user_checker.cnrao' => 'security.user_checker.login',
            'security.user_checker.main' => 'security.user_checker.login',
            'security.user_checker.mobile_login' => 'security.user_checker.login',
            'security.user_checker.rest' => 'security.user_checker.login',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function compile()
    {
        throw new LogicException('You cannot compile a dumped frozen container.');
    }

    /**
     * {@inheritdoc}
     */
    public function isFrozen()
    {
        return true;
    }

    /**
     * Gets the public 'acme_api.event.jwt_auth_listener' shared service.
     *
     * @return \PS\MobileBundle\EventListener\JWTAuthenticatedListener
     */
    protected function getAcmeApi_Event_JwtAuthListenerService()
    {
        return $this->services['acme_api.event.jwt_auth_listener'] = new \PS\MobileBundle\EventListener\JWTAuthenticatedListener($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the public 'acme_api.event.jwt_created_listener' shared service.
     *
     * @return \PS\MobileBundle\EventListener\JWTCreatedListener
     */
    protected function getAcmeApi_Event_JwtCreatedListenerService()
    {
        return $this->services['acme_api.event.jwt_created_listener'] = new \PS\MobileBundle\EventListener\JWTCreatedListener($this->get('security.authorization_checker'), $this->get('doctrine.orm.default_entity_manager'), $this->get('fos_user.user_manager'));
    }

    /**
     * Gets the public 'acme_api.event.jwt_decoded_listener' shared service.
     *
     * @return \PS\MobileBundle\EventListener\JWTDecodedListener
     */
    protected function getAcmeApi_Event_JwtDecodedListenerService()
    {
        return $this->services['acme_api.event.jwt_decoded_listener'] = new \PS\MobileBundle\EventListener\JWTDecodedListener($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(new \Doctrine\Common\Annotations\AnnotationReader(), new \Doctrine\Common\Cache\FilesystemCache((__DIR__.'/annotations')), true);
    }

    /**
     * Gets the public 'app.action_logger' shared service.
     *
     * @return \PS\GestionBundle\Service\ActionLogger
     */
    protected function getApp_ActionLoggerService()
    {
        return $this->services['app.action_logger'] = new \PS\GestionBundle\Service\ActionLogger($this->get('security.token_storage'), $this->get('doctrine.orm.default_entity_manager'), $this->get('session'));
    }

    /**
     * Gets the public 'app.api_upload' shared service.
     *
     * @return \PS\ApiBundle\File\ApiUploadedFile
     */
    protected function getApp_ApiUploadService()
    {
        return $this->services['app.api_upload'] = new \PS\ApiBundle\File\ApiUploadedFile();
    }

    /**
     * Gets the public 'app.assurance_constraint' shared service.
     *
     * @return \PS\GestionBundle\Validator\Constraints\AssuranceConstraintValidator
     */
    protected function getApp_AssuranceConstraintService()
    {
        return $this->services['app.assurance_constraint'] = new \PS\GestionBundle\Validator\Constraints\AssuranceConstraintValidator($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the public 'app.commande_pack_type' shared service.
     *
     * @return \PS\GestionBundle\Form\CommandePackType
     */
    protected function getApp_CommandePackTypeService()
    {
        return $this->services['app.commande_pack_type'] = new \PS\GestionBundle\Form\CommandePackType($this->get('session'));
    }

    /**
     * Gets the public 'app.constance_type' shared service.
     *
     * @return \PS\GestionBundle\Form\ConstanteType
     */
    protected function getApp_ConstanceTypeService()
    {
        return $this->services['app.constance_type'] = new \PS\GestionBundle\Form\ConstanteType($this->get('security.token_storage'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the public 'app.consultation_type' shared service.
     *
     * @return \PS\GestionBundle\Form\ConsultationType
     */
    protected function getApp_ConsultationTypeService()
    {
        return $this->services['app.consultation_type'] = new \PS\GestionBundle\Form\ConsultationType($this->get('security.token_storage'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the public 'app.contains_pass_client' shared service.
     *
     * @return \PS\GestionBundle\Validator\Constraints\PassValidator
     */
    protected function getApp_ContainsPassClientService()
    {
        return $this->services['app.contains_pass_client'] = new \PS\GestionBundle\Validator\Constraints\PassValidator($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the public 'app.contains_pass_validator' shared service.
     *
     * @return \PS\GestionBundle\Validator\Constraints\PassConstraintValidator
     */
    protected function getApp_ContainsPassValidatorService()
    {
        return $this->services['app.contains_pass_validator'] = new \PS\GestionBundle\Validator\Constraints\PassConstraintValidator($this->get('doctrine.orm.default_entity_manager'), $this->get('security.token_storage'));
    }

    /**
     * Gets the public 'app.corporate_type' shared service.
     *
     * @return \PS\GestionBundle\Form\CorporateType
     */
    protected function getApp_CorporateTypeService()
    {
        return $this->services['app.corporate_type'] = new \PS\GestionBundle\Form\CorporateType($this->get('security.token_storage'));
    }

    /**
     * Gets the public 'app.custom_twig_extension' shared service.
     *
     * @return \PS\GestionBundle\Twig\CustomExtension
     */
    protected function getApp_CustomTwigExtensionService()
    {
        return $this->services['app.custom_twig_extension'] = new \PS\GestionBundle\Twig\CustomExtension($this->get('request_stack'), ($this->targetDirs[2].'/../web'), $this->get('twig.form.renderer'));
    }

    /**
     * Gets the public 'app.doctrine_logolistener' shared service.
     *
     * @return \PS\GestionBundle\EventListener\LogoUploadListener
     */
    protected function getApp_DoctrineLogolistenerService()
    {
        return $this->services['app.doctrine_logolistener'] = new \PS\GestionBundle\EventListener\LogoUploadListener($this->get('app.psm_logo_uploader'));
    }

    /**
     * Gets the public 'app.fiche_type' shared service.
     *
     * @return \PS\SpecialiteBundle\Form\FicheType
     */
    protected function getApp_FicheTypeService()
    {
        return $this->services['app.fiche_type'] = new \PS\SpecialiteBundle\Form\FicheType($this->get('security.token_storage'));
    }

    /**
     * Gets the public 'app.file_exporter' shared service.
     *
     * @return \PS\GestionBundle\Service\FileExporter
     */
    protected function getApp_FileExporterService()
    {
        return $this->services['app.file_exporter'] = new \PS\GestionBundle\Service\FileExporter($this->get('phpoffice.spreadsheet'));
    }

    /**
     * Gets the public 'app.form.change_password' shared service.
     *
     * @return \PS\UtilisateurBundle\Form\ChangePasswordFormType
     */
    protected function getApp_Form_ChangePasswordService()
    {
        return $this->services['app.form.change_password'] = new \PS\UtilisateurBundle\Form\ChangePasswordFormType();
    }

    /**
     * Gets the public 'app.form.profile_form' shared service.
     *
     * @return \PS\UtilisateurBundle\Form\ProfileType
     */
    protected function getApp_Form_ProfileFormService()
    {
        return $this->services['app.form.profile_form'] = new \PS\UtilisateurBundle\Form\ProfileType();
    }

    /**
     * Gets the public 'app.form.registration' shared service.
     *
     * @return \PS\UtilisateurBundle\Form\RegistrationType
     */
    protected function getApp_Form_RegistrationService()
    {
        return $this->services['app.form.registration'] = new \PS\UtilisateurBundle\Form\RegistrationType();
    }

    /**
     * Gets the public 'app.form.reset_password' shared service.
     *
     * @return \PS\UtilisateurBundle\Form\ResettingFormType
     */
    protected function getApp_Form_ResetPasswordService()
    {
        return $this->services['app.form.reset_password'] = new \PS\UtilisateurBundle\Form\ResettingFormType();
    }

    /**
     * Gets the public 'app.form_builder' shared service.
     *
     * @return \PS\SpecialiteBundle\Service\FormBuilder
     */
    protected function getApp_FormBuilderService()
    {
        return $this->services['app.form_builder'] = new \PS\SpecialiteBundle\Service\FormBuilder($this->get('form.factory'));
    }

    /**
     * Gets the public 'app.form_error' shared service.
     *
     * @return \PS\GestionBundle\Service\FormErrors
     */
    protected function getApp_FormErrorService()
    {
        return $this->services['app.form_error'] = new \PS\GestionBundle\Service\FormErrors();
    }

    /**
     * Gets the public 'app.form_error_serializer' shared service.
     *
     * @return \PS\GestionBundle\Service\FormErrorsSerializer
     */
    protected function getApp_FormErrorSerializerService()
    {
        return $this->services['app.form_error_serializer'] = new \PS\GestionBundle\Service\FormErrorsSerializer();
    }

    /**
     * Gets the public 'app.locale_listener' shared service.
     *
     * @return \PS\GestionBundle\EventListener\LocaleListener
     */
    protected function getApp_LocaleListenerService()
    {
        return $this->services['app.locale_listener'] = new \PS\GestionBundle\EventListener\LocaleListener('fr', $this->get('router'));
    }

    /**
     * Gets the public 'app.medecin_type' shared service.
     *
     * @return \PS\GestionBundle\Form\MedecinType
     */
    protected function getApp_MedecinTypeService()
    {
        return $this->services['app.medecin_type'] = new \PS\GestionBundle\Form\MedecinType($this->get('security.token_storage'));
    }

    /**
     * Gets the public 'app.mtarget_sms' shared autowired service.
     *
     * @return \PS\GestionBundle\Service\MtargetApiService
     */
    protected function getApp_MtargetSmsService()
    {
        return $this->services['app.mtarget_sms'] = new \PS\GestionBundle\Service\MtargetApiService($this->get('security.token_storage'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the public 'app.osms' shared service.
     *
     * @return \Osms\Osms
     */
    protected function getApp_OsmsService()
    {
        return $this->services['app.osms'] = new \Osms\Osms();
    }

    /**
     * Gets the public 'app.ps_sms' shared service.
     *
     * @return \PS\GestionBundle\Manager\SmsManager
     */
    protected function getApp_PsSmsService()
    {
        return $this->services['app.ps_sms'] = new \PS\GestionBundle\Manager\SmsManager($this->get('app.osms'), $this->get('security.token_storage'), $this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the public 'app.psm_logo_uploader' shared service.
     *
     * @return \PS\GestionBundle\Service\FileUploader
     */
    protected function getApp_PsmLogoUploaderService()
    {
        return $this->services['app.psm_logo_uploader'] = new \PS\GestionBundle\Service\FileUploader($this->targetDirs[2]);
    }

    /**
     * Gets the public 'app.psm_util' shared service.
     *
     * @return \PS\GestionBundle\Service\Util
     */
    protected function getApp_PsmUtilService()
    {
        return $this->services['app.psm_util'] = new \PS\GestionBundle\Service\Util();
    }

    /**
     * Gets the public 'app.rdv_date_constraint' shared service.
     *
     * @return \PS\GestionBundle\Validator\Constraints\DateTimeAvailabilityConstraintValidator
     */
    protected function getApp_RdvDateConstraintService()
    {
        return $this->services['app.rdv_date_constraint'] = new \PS\GestionBundle\Validator\Constraints\DateTimeAvailabilityConstraintValidator($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the public 'app.rdv_type' shared service.
     *
     * @return \PS\GestionBundle\Form\RendezVousType
     */
    protected function getApp_RdvTypeService()
    {
        return $this->services['app.rdv_type'] = new \PS\GestionBundle\Form\RendezVousType($this->get('security.token_storage'), $this->get('doctrine.orm.default_entity_manager'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the public 'app.reminder' shared service.
     *
     * @return \PS\GestionBundle\Service\Rappel
     */
    protected function getApp_ReminderService()
    {
        return $this->services['app.reminder'] = new \PS\GestionBundle\Service\Rappel($this->get('doctrine.orm.default_entity_manager'), $this->get('app.ps_sms'), $this->get('swiftmailer.mailer.default'));
    }

    /**
     * Gets the public 'app.textarea_type_extension' shared service.
     *
     * @return \PS\GestionBundle\Form\Type\TextAreaTypeEmptyDataExtension
     */
    protected function getApp_TextareaTypeExtensionService()
    {
        return $this->services['app.textarea_type_extension'] = new \PS\GestionBundle\Form\Type\TextAreaTypeEmptyDataExtension();
    }

    /**
     * Gets the public 'app.utilisateur_type' shared service.
     *
     * @return \PS\UtilisateurBundle\Form\UtilisateurType
     */
    protected function getApp_UtilisateurTypeService()
    {
        return $this->services['app.utilisateur_type'] = new \PS\UtilisateurBundle\Form\UtilisateurType($this->get('session'), $this->get('request_stack'), $this->get('doctrine.orm.default_entity_manager'), $this->get('security.token_storage'));
    }

    /**
     * Gets the public 'app.validator.unique_value_in_entity' shared service.
     *
     * @return \PS\MobileBundle\Validator\Constraints\UniqueValueEntityValidator
     */
    protected function getApp_Validator_UniqueValueInEntityService()
    {
        return $this->services['app.validator.unique_value_in_entity'] = new \PS\MobileBundle\Validator\Constraints\UniqueValueEntityValidator($this->get('doctrine.orm.default_entity_manager'));
    }

    /**
     * Gets the public 'apy_grid.column.array' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Column\ArrayColumn
     */
    protected function getApyGrid_Column_ArrayService()
    {
        return $this->services['apy_grid.column.array'] = new \APY\DataGridBundle\Grid\Column\ArrayColumn();
    }

    /**
     * Gets the public 'apy_grid.column.blank' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Column\BlankColumn
     */
    protected function getApyGrid_Column_BlankService()
    {
        return $this->services['apy_grid.column.blank'] = new \APY\DataGridBundle\Grid\Column\BlankColumn();
    }

    /**
     * Gets the public 'apy_grid.column.boolean' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Column\BooleanColumn
     */
    protected function getApyGrid_Column_BooleanService()
    {
        return $this->services['apy_grid.column.boolean'] = new \APY\DataGridBundle\Grid\Column\BooleanColumn();
    }

    /**
     * Gets the public 'apy_grid.column.date' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Column\DateColumn
     */
    protected function getApyGrid_Column_DateService()
    {
        return $this->services['apy_grid.column.date'] = new \APY\DataGridBundle\Grid\Column\DateColumn();
    }

    /**
     * Gets the public 'apy_grid.column.date_time' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Column\DateTimeColumn
     */
    protected function getApyGrid_Column_DateTimeService()
    {
        return $this->services['apy_grid.column.date_time'] = new \APY\DataGridBundle\Grid\Column\DateTimeColumn();
    }

    /**
     * Gets the public 'apy_grid.column.join' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Column\JoinColumn
     */
    protected function getApyGrid_Column_JoinService()
    {
        return $this->services['apy_grid.column.join'] = new \APY\DataGridBundle\Grid\Column\JoinColumn();
    }

    /**
     * Gets the public 'apy_grid.column.number' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Column\NumberColumn
     */
    protected function getApyGrid_Column_NumberService()
    {
        return $this->services['apy_grid.column.number'] = new \APY\DataGridBundle\Grid\Column\NumberColumn();
    }

    /**
     * Gets the public 'apy_grid.column.rank' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Column\RankColumn
     */
    protected function getApyGrid_Column_RankService()
    {
        return $this->services['apy_grid.column.rank'] = new \APY\DataGridBundle\Grid\Column\RankColumn();
    }

    /**
     * Gets the public 'apy_grid.column.text' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Column\TextColumn
     */
    protected function getApyGrid_Column_TextService()
    {
        return $this->services['apy_grid.column.text'] = new \APY\DataGridBundle\Grid\Column\TextColumn();
    }

    /**
     * Gets the public 'apy_grid.column.time' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Column\TimeColumn
     */
    protected function getApyGrid_Column_TimeService()
    {
        return $this->services['apy_grid.column.time'] = new \APY\DataGridBundle\Grid\Column\TimeColumn();
    }

    /**
     * Gets the public 'apy_grid.factory' shared service.
     *
     * @return \APY\DataGridBundle\Grid\GridFactory
     */
    protected function getApyGrid_FactoryService()
    {
        return $this->services['apy_grid.factory'] = new \APY\DataGridBundle\Grid\GridFactory($this, $this->get('apy_grid.registry'));
    }

    /**
     * Gets the public 'apy_grid.registry' shared service.
     *
     * @return \APY\DataGridBundle\Grid\GridRegistry
     */
    protected function getApyGrid_RegistryService()
    {
        $this->services['apy_grid.registry'] = $instance = new \APY\DataGridBundle\Grid\GridRegistry();

        $instance->addType($this->get('apy_grid.type.grid'));
        $instance->addColumn($this->get('apy_grid.column.text'));
        $instance->addColumn($this->get('apy_grid.column.array'));
        $instance->addColumn($this->get('apy_grid.column.blank'));
        $instance->addColumn($this->get('apy_grid.column.boolean'));
        $instance->addColumn($this->get('apy_grid.column.date'));
        $instance->addColumn($this->get('apy_grid.column.date_time'));
        $instance->addColumn($this->get('apy_grid.column.join'));
        $instance->addColumn($this->get('apy_grid.column.number'));
        $instance->addColumn($this->get('apy_grid.column.rank'));
        $instance->addColumn($this->get('apy_grid.column.time'));

        return $instance;
    }

    /**
     * Gets the public 'apy_grid.type.grid' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Type\GridType
     */
    protected function getApyGrid_Type_GridService()
    {
        return $this->services['apy_grid.type.grid'] = new \APY\DataGridBundle\Grid\Type\GridType();
    }

    /**
     * Gets the public 'assets._version__default' shared service.
     *
     * @return \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy
     */
    protected function getAssets_VersionDefaultService()
    {
        return $this->services['assets._version__default'] = new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('v3', '%s?%s');
    }

    /**
     * Gets the public 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext($this->get('request_stack'));
    }

    /**
     * Gets the public 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', $this->get('assets._version__default'), $this->get('assets.context')), array());
    }

    /**
     * Gets the public 'avanzu_admin_theme.context_listener' shared service.
     *
     * @return \Avanzu\AdminThemeBundle\EventListener\ContextListener
     */
    protected function getAvanzuAdminTheme_ContextListenerService()
    {
        return $this->services['avanzu_admin_theme.context_listener'] = new \Avanzu\AdminThemeBundle\EventListener\ContextListener($this);
    }

    /**
     * Gets the public 'avanzu_admin_theme.exception_controller' shared service.
     *
     * @return \Avanzu\AdminThemeBundle\Controller\ExceptionController
     */
    protected function getAvanzuAdminTheme_ExceptionControllerService()
    {
        return $this->services['avanzu_admin_theme.exception_controller'] = new \Avanzu\AdminThemeBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the public 'avanzu_admin_theme.setup_theme_listener' shared service.
     *
     * @return \Avanzu\AdminThemeBundle\EventListener\SetupThemeListener
     */
    protected function getAvanzuAdminTheme_SetupThemeListenerService()
    {
        return $this->services['avanzu_admin_theme.setup_theme_listener'] = new \Avanzu\AdminThemeBundle\EventListener\SetupThemeListener($this->get('avanzu_admin_theme.theme_manager'), '', '');
    }

    /**
     * Gets the public 'avanzu_admin_theme.theme_manager' shared service.
     *
     * @return \Avanzu\AdminThemeBundle\Theme\ThemeManager
     */
    protected function getAvanzuAdminTheme_ThemeManagerService()
    {
        return $this->services['avanzu_admin_theme.theme_manager'] = new \Avanzu\AdminThemeBundle\Theme\ThemeManager($this, '');
    }

    /**
     * Gets the public 'avanzu_admin_theme.widget_extension.class' shared service.
     *
     * @return \Avanzu\AdminThemeBundle\Twig\WidgetExtension
     */
    protected function getAvanzuAdminTheme_WidgetExtension_ClassService()
    {
        return $this->services['avanzu_admin_theme.widget_extension.class'] = new \Avanzu\AdminThemeBundle\Twig\WidgetExtension();
    }

    /**
     * Gets the public 'cache_clearer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer
     */
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }

    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');

        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, ($this->targetDirs[2].'/Resources'));

        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => $this->get('kernel.class_cache.cache_warmer'), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TranslationsCacheWarmer($this->get('translator.default')), 3 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 4 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c, array(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form') => NULL)), 5 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer($this, new \Symfony\Bundle\TwigBundle\TemplateIterator($a, $this->targetDirs[2], array(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form') => NULL))), 6 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine'))));
    }

    /**
     * Gets the public 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(array(0 => new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker(), 1 => new \Symfony\Component\Config\Resource\BCResourceInterfaceChecker()));
    }

    /**
     * Gets the public 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE)), $this->get('debug.stopwatch'));
    }

    /**
     * Gets the public 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $this->get('monolog.logger.php', ContainerInterface::NULL_ON_INVALID_REFERENCE), -4182, NULL, true, NULL);
    }

    /**
     * Gets the public 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), $this->get('debug.stopwatch'), $this->get('monolog.logger.event', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->addListenerService('lexik_jwt_authentication.on_jwt_created', array(0 => 'acme_api.event.jwt_created_listener', 1 => 'onJWTCreated'), 0);
        $instance->addListenerService('lexik_jwt_authentication.on_jwt_decoded', array(0 => 'acme_api.event.jwt_decoded_listener', 1 => 'onJWTDecoded'), 0);
        $instance->addListenerService('lexik_jwt_authentication.on_jwt_authenticated', array(0 => 'acme_api.event.jwt_auth_listener', 1 => 'onJWTAuthenticated'), 0);
        $instance->addListenerService('theme.navbar_user', array(0 => 'my_admin_bundle.show_user_listener', 1 => 'onShowUser'), 0);
        $instance->addListenerService('theme.sidebar_user', array(0 => 'my_admin_bundle.show_user_listener', 1 => 'onShowUser'), 0);
        $instance->addListenerService('theme.sidebar_setup_menu', array(0 => 'my_admin_bundle.menu_listener', 1 => 'onSetupMenu'), 0);
        $instance->addListenerService('theme.breadcrumb', array(0 => 'my_admin_bundle.breadcrumb_listener', 1 => 'onSetupMenu'), 0);
        $instance->addListenerService('theme.tasks', array(0 => 'my_admin_bundle.task_list_listener', 1 => 'onListTasks'), 0);
        $instance->addListenerService('theme.notifications', array(0 => 'my_admin_bundle.notification_list_listener', 1 => 'onListNotifications'), 0);
        $instance->addListenerService('kernel.controller', array(0 => 'avanzu_admin_theme.setup_theme_listener', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'avanzu_admin_theme.context_listener', 1 => 'onRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'knp_paginator.subscriber.sliding_pagination', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.body_listener', 1 => 'onKernelRequest'), 10);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.format_listener', 1 => 'onKernelRequest'), 34);
        $instance->addListenerService('kernel.request', array(0 => 'fos_rest.versioning.listener', 1 => 'onKernelRequest'), 33);
        $instance->addListenerService('kernel.controller', array(0 => 'fos_rest.param_fetcher_listener', 1 => 'onKernelController'), 5);
        $instance->addListenerService('kernel.request', array(0 => 'nelmio_cors.cors_listener', 1 => 'onKernelRequest'), 250);
        $instance->addListenerService('kernel.response', array(0 => 'jms_i18n_routing.cookie_setting_listener', 1 => 'onKernelResponse'), 256);
        $instance->addSubscriberService('app.locale_listener', 'PS\\GestionBundle\\EventListener\\LocaleListener');
        $instance->addSubscriberService('psm.registration_event', 'PS\\UtilisateurBundle\\EventListener\\UserRegistrationListener');
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('translator_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\TranslatorListener');
        $instance->addSubscriberService('validate_request_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ValidateRequestListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('session.save_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\SaveSessionListener');
        $instance->addSubscriberService('fragment.listener', 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('debug.debug_handlers_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('monolog.handler.console', 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\HttpCacheListener');
        $instance->addSubscriberService('sensio_framework_extra.security.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\SecurityListener');
        $instance->addSubscriberService('fos_user.security.interactive_login_listener', 'FOS\\UserBundle\\EventListener\\LastLoginListener');
        $instance->addSubscriberService('fos_user.listener.authentication', 'FOS\\UserBundle\\EventListener\\AuthenticationListener');
        $instance->addSubscriberService('fos_user.listener.flash', 'FOS\\UserBundle\\EventListener\\FlashListener');
        $instance->addSubscriberService('fos_user.listener.resetting', 'FOS\\UserBundle\\EventListener\\ResettingListener');
        $instance->addSubscriberService('fos_rest.exception_listener', 'FOS\\RestBundle\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('fos_rest.view_response_listener', 'FOS\\RestBundle\\EventListener\\ViewResponseListener');
        $instance->addSubscriberService('knp_paginator.subscriber.paginate', 'Knp\\Component\\Pager\\Event\\Subscriber\\Paginate\\PaginationSubscriber');
        $instance->addSubscriberService('knp_paginator.subscriber.sortable', 'Knp\\Component\\Pager\\Event\\Subscriber\\Sortable\\SortableSubscriber');
        $instance->addSubscriberService('knp_paginator.subscriber.filtration', 'Knp\\Component\\Pager\\Event\\Subscriber\\Filtration\\FiltrationSubscriber');
        $instance->addSubscriberService('knp_paginator.subscriber.sliding_pagination', 'Knp\\Bundle\\PaginatorBundle\\Subscriber\\SlidingPaginationSubscriber');

        return $instance;
    }

    /**
     * Gets the public 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch();
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        return $this->services['doctrine.cache_clear_metadata_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        return $this->services['doctrine.cache_clear_query_cache_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        return $this->services['doctrine.cache_clear_result_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        return $this->services['doctrine.cache_collection_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        return $this->services['doctrine.clear_entity_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        return $this->services['doctrine.clear_query_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        return $this->services['doctrine.database_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        return $this->services['doctrine.database_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        return $this->services['doctrine.database_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array());
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = $this->get('app.doctrine_logolistener');

        $b = new \Doctrine\DBAL\Logging\LoggerChain();
        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($this->get('monolog.logger.doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $b->addLogger(new \Doctrine\DBAL\Logging\DebugStack());

        $c = new \Doctrine\DBAL\Configuration();
        $c->setSQLLogger($b);

        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $d->addEventSubscriber(new \FOS\UserBundle\Doctrine\UserListener($this->get('fos_user.util.password_updater'), $this->get('fos_user.util.canonical_fields_updater')));
        $d->addEventListener(array(0 => 'prePersist'), $a);
        $d->addEventListener(array(0 => 'preUpdate'), $a);
        $d->addEventListener(array(0 => 'postConnect'), $this->get('psm_d_post_connect'));
        $d->addEventListener(array(0 => 'loadClassMetadata'), $this->get('doctrine.orm.default_listeners.attach_entity_listeners'));

        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('driver' => 'pdo_mysql', 'host' => 'srv-captain--mysql-serveur-db', 'port' => 3306, 'dbname' => 'pass_sante_db', 'user' => 'root', 'password' => 'DataX2023', 'charset' => 'UTF8', 'driverOptions' => array(), 'defaultTableOptions' => array()), $c, $d, array());
    }

    /**
     * Gets the public 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        return $this->services['doctrine.ensure_production_settings_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        return $this->services['doctrine.generate_entities_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        return $this->services['doctrine.mapping_convert_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        return $this->services['doctrine.mapping_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand($this->get('doctrine'), array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'AvanzuAdminThemeBundle' => 'Avanzu\\AdminThemeBundle\\AvanzuAdminThemeBundle', 'ParametreBundle' => 'PS\\ParametreBundle\\ParametreBundle', 'SiteBundle' => 'PS\\SiteBundle\\SiteBundle', 'UtilisateurBundle' => 'PS\\UtilisateurBundle\\UtilisateurBundle', 'GestionBundle' => 'PS\\GestionBundle\\GestionBundle', 'APYDataGridBundle' => 'APY\\DataGridBundle\\APYDataGridBundle', 'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle', 'EnseparHtml2pdfBundle' => 'Ensepar\\Html2pdfBundle\\EnseparHtml2pdfBundle', 'ObHighchartsBundle' => 'Ob\\HighchartsBundle\\ObHighchartsBundle', 'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle', 'PSApiBundle' => 'PS\\ApiBundle\\PSApiBundle', 'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle', 'LexikJWTAuthenticationBundle' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\LexikJWTAuthenticationBundle', 'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle', 'IvoryBase64FileBundle' => 'Ivory\\Base64FileBundle\\IvoryBase64FileBundle', 'SCDatetimepickerBundle' => 'SC\\DatetimepickerBundle\\SCDatetimepickerBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'PhpSpreadsheetBundle' => 'Yectep\\PhpSpreadsheetBundle\\PhpSpreadsheetBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'PSSpecialiteBundle' => 'PS\\SpecialiteBundle\\PSSpecialiteBundle', 'MobileBundle' => 'PS\\MobileBundle\\MobileBundle'));
    }

    /**
     * Gets the public 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        return $this->services['doctrine.mapping_info_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = $this->get('annotation_reader');

        $b = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($a, array(0 => ($this->targetDirs[3].'\\src\\PS\\ParametreBundle\\Entity'), 1 => ($this->targetDirs[3].'\\src\\PS\\SiteBundle\\Entity'), 2 => ($this->targetDirs[3].'\\src\\PS\\UtilisateurBundle\\Entity'), 3 => ($this->targetDirs[3].'\\src\\PS\\GestionBundle\\Entity'), 4 => ($this->targetDirs[3].'\\src\\PS\\SpecialiteBundle\\Entity')));

        $c = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
        $c->addDriver($b, 'PS\\ParametreBundle\\Entity');
        $c->addDriver($b, 'PS\\SiteBundle\\Entity');
        $c->addDriver($b, 'PS\\UtilisateurBundle\\Entity');
        $c->addDriver($b, 'PS\\GestionBundle\\Entity');
        $c->addDriver($b, 'PS\\SpecialiteBundle\\Entity');
        $c->addDriver(new \Doctrine\ORM\Mapping\Driver\XmlDriver(new \Doctrine\Common\Persistence\Mapping\Driver\SymfonyFileLocator(array(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\Resources\\config\\doctrine-mapping') => 'FOS\\UserBundle\\Model'), '.orm.xml')), 'FOS\\UserBundle\\Model');

        $d = new \Doctrine\ORM\Configuration();
        $d->setEntityNamespaces(array('ParametreBundle' => 'PS\\ParametreBundle\\Entity', 'SiteBundle' => 'PS\\SiteBundle\\Entity', 'UtilisateurBundle' => 'PS\\UtilisateurBundle\\Entity', 'GestionBundle' => 'PS\\GestionBundle\\Entity', 'PSSpecialiteBundle' => 'PS\\SpecialiteBundle\\Entity'));
        $d->setMetadataCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_metadata_cache'));
        $d->setQueryCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_query_cache'));
        $d->setResultCacheImpl($this->get('doctrine_cache.providers.doctrine.orm.default_result_cache'));
        $d->setMetadataDriverImpl($c);
        $d->setProxyDir((__DIR__.'/doctrine/orm/Proxies'));
        $d->setProxyNamespace('Proxies');
        $d->setAutoGenerateProxyClasses(true);
        $d->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $d->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $d->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy());
        $d->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $d->setEntityListenerResolver($this->get('doctrine.orm.default_entity_listener_resolver'));
        $d->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(NULL));
        $d->addCustomStringFunction('aes_decrypt', 'DoctrineExtensions\\Query\\Mysql\\AesDecrypt');
        $d->addCustomStringFunction('aes_encrypt', 'DoctrineExtensions\\Query\\Mysql\\AesEncrypt');
        $d->addCustomStringFunction('any_value', 'DoctrineExtensions\\Query\\Mysql\\AnyValue');
        $d->addCustomStringFunction('ascii', 'DoctrineExtensions\\Query\\Mysql\\Ascii');
        $d->addCustomStringFunction('binary', 'DoctrineExtensions\\Query\\Mysql\\Binary');
        $d->addCustomStringFunction('char_length', 'DoctrineExtensions\\Query\\Mysql\\CharLength');
        $d->addCustomStringFunction('collate', 'DoctrineExtensions\\Query\\Mysql\\Collate');
        $d->addCustomStringFunction('concat_ws', 'DoctrineExtensions\\Query\\Mysql\\ConcatWs');
        $d->addCustomStringFunction('countif', 'DoctrineExtensions\\Query\\Mysql\\CountIf');
        $d->addCustomStringFunction('crc32', 'DoctrineExtensions\\Query\\Mysql\\Crc32');
        $d->addCustomStringFunction('degrees', 'DoctrineExtensions\\Query\\Mysql\\Degrees');
        $d->addCustomStringFunction('field', 'DoctrineExtensions\\Query\\Mysql\\Field');
        $d->addCustomStringFunction('find_in_set', 'DoctrineExtensions\\Query\\Mysql\\FindInSet');
        $d->addCustomStringFunction('greatest', 'DoctrineExtensions\\Query\\Mysql\\Greatest');
        $d->addCustomStringFunction('group_concat', 'DoctrineExtensions\\Query\\Mysql\\GroupConcat');
        $d->addCustomStringFunction('ifelse', 'DoctrineExtensions\\Query\\Mysql\\IfElse');
        $d->addCustomStringFunction('ifnull', 'DoctrineExtensions\\Query\\Mysql\\IfNull');
        $d->addCustomStringFunction('instr', 'DoctrineExtensions\\Query\\Mysql\\Instr');
        $d->addCustomStringFunction('least', 'DoctrineExtensions\\Query\\Mysql\\Least');
        $d->addCustomStringFunction('lpad', 'DoctrineExtensions\\Query\\Mysql\\Lpad');
        $d->addCustomStringFunction('match', 'DoctrineExtensions\\Query\\Mysql\\MatchAgainst');
        $d->addCustomStringFunction('md5', 'DoctrineExtensions\\Query\\Mysql\\Md5');
        $d->addCustomStringFunction('nullif', 'DoctrineExtensions\\Query\\Mysql\\NullIf');
        $d->addCustomStringFunction('radians', 'DoctrineExtensions\\Query\\Mysql\\Radians');
        $d->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $d->addCustomStringFunction('replace', 'DoctrineExtensions\\Query\\Mysql\\Replace');
        $d->addCustomStringFunction('rpad', 'DoctrineExtensions\\Query\\Mysql\\Rpad');
        $d->addCustomStringFunction('sha1', 'DoctrineExtensions\\Query\\Mysql\\Sha1');
        $d->addCustomStringFunction('sha2', 'DoctrineExtensions\\Query\\Mysql\\Sha2');
        $d->addCustomStringFunction('soundex', 'DoctrineExtensions\\Query\\Mysql\\Soundex');
        $d->addCustomStringFunction('str_to_date', 'DoctrineExtensions\\Query\\Mysql\\StrToDate');
        $d->addCustomStringFunction('substring_index', 'DoctrineExtensions\\Query\\Mysql\\SubstringIndex');
        $d->addCustomStringFunction('uuid_short', 'DoctrineExtensions\\Query\\Mysql\\UuidShort');
        $d->addCustomStringFunction('hex', 'DoctrineExtensions\\Query\\Mysql\\Hex');
        $d->addCustomStringFunction('unhex', 'DoctrineExtensions\\Query\\Mysql\\Unhex');
        $d->addCustomNumericFunction('acos', 'DoctrineExtensions\\Query\\Mysql\\Acos');
        $d->addCustomNumericFunction('asin', 'DoctrineExtensions\\Query\\Mysql\\Asin');
        $d->addCustomNumericFunction('atan2', 'DoctrineExtensions\\Query\\Mysql\\Atan2');
        $d->addCustomNumericFunction('atan', 'DoctrineExtensions\\Query\\Mysql\\Atan');
        $d->addCustomNumericFunction('bit_count', 'DoctrineExtensions\\Query\\Mysql\\BitCount');
        $d->addCustomNumericFunction('bit_xor', 'DoctrineExtensions\\Query\\Mysql\\BitXor');
        $d->addCustomNumericFunction('ceil', 'DoctrineExtensions\\Query\\Mysql\\Ceil');
        $d->addCustomNumericFunction('cos', 'DoctrineExtensions\\Query\\Mysql\\Cos');
        $d->addCustomNumericFunction('cot', 'DoctrineExtensions\\Query\\Mysql\\Cot');
        $d->addCustomNumericFunction('degrees', 'DoctrineExtensions\\Query\\Mysql\\Degrees');
        $d->addCustomNumericFunction('exp', 'DoctrineExtensions\\Query\\Mysql\\Exp');
        $d->addCustomNumericFunction('floor', 'DoctrineExtensions\\Query\\Mysql\\Floor');
        $d->addCustomNumericFunction('log', 'DoctrineExtensions\\Query\\Mysql\\Log');
        $d->addCustomNumericFunction('log10', 'DoctrineExtensions\\Query\\Mysql\\Log10');
        $d->addCustomNumericFunction('log2', 'DoctrineExtensions\\Query\\Mysql\\Log2');
        $d->addCustomNumericFunction('pi', 'DoctrineExtensions\\Query\\Mysql\\Pi');
        $d->addCustomNumericFunction('power', 'DoctrineExtensions\\Query\\Mysql\\Power');
        $d->addCustomNumericFunction('quarter', 'DoctrineExtensions\\Query\\Mysql\\Quarter');
        $d->addCustomNumericFunction('radians', 'DoctrineExtensions\\Query\\Mysql\\Radians');
        $d->addCustomNumericFunction('rand', 'DoctrineExtensions\\Query\\Mysql\\Rand');
        $d->addCustomNumericFunction('round', 'DoctrineExtensions\\Query\\Mysql\\Round');
        $d->addCustomNumericFunction('stddev', 'DoctrineExtensions\\Query\\Mysql\\StdDev');
        $d->addCustomNumericFunction('sin', 'DoctrineExtensions\\Query\\Mysql\\Sin');
        $d->addCustomNumericFunction('std', 'DoctrineExtensions\\Query\\Mysql\\Std');
        $d->addCustomNumericFunction('tan', 'DoctrineExtensions\\Query\\Mysql\\Tan');
        $d->addCustomNumericFunction('variance', 'DoctrineExtensions\\Query\\Mysql\\Variance');
        $d->addCustomDatetimeFunction('convert_tz', 'DoctrineExtensions\\Query\\Mysql\\ConvertTz');
        $d->addCustomDatetimeFunction('date', 'DoctrineExtensions\\Query\\Mysql\\Date');
        $d->addCustomDatetimeFunction('date_format', 'DoctrineExtensions\\Query\\Mysql\\DateFormat');
        $d->addCustomDatetimeFunction('dateadd', 'DoctrineExtensions\\Query\\Mysql\\DateAdd');
        $d->addCustomDatetimeFunction('datesub', 'DoctrineExtensions\\Query\\Mysql\\DateSub');
        $d->addCustomDatetimeFunction('datediff', 'DoctrineExtensions\\Query\\Mysql\\DateDiff');
        $d->addCustomDatetimeFunction('day', 'DoctrineExtensions\\Query\\Mysql\\Day');
        $d->addCustomDatetimeFunction('dayname', 'DoctrineExtensions\\Query\\Mysql\\DayName');
        $d->addCustomDatetimeFunction('dayofweek', 'DoctrineExtensions\\Query\\Mysql\\DayOfWeek');
        $d->addCustomDatetimeFunction('dayofyear', 'DoctrineExtensions\\Query\\Mysql\\DayOfYear');
        $d->addCustomDatetimeFunction('div', 'DoctrineExtensions\\Query\\Mysql\\Div');
        $d->addCustomDatetimeFunction('from_unixtime', 'DoctrineExtensions\\Query\\Mysql\\FromUnixtime');
        $d->addCustomDatetimeFunction('hour', 'DoctrineExtensions\\Query\\Mysql\\Hour');
        $d->addCustomDatetimeFunction('last_day', 'DoctrineExtensions\\Query\\Mysql\\LastDay');
        $d->addCustomDatetimeFunction('minute', 'DoctrineExtensions\\Query\\Mysql\\Minute');
        $d->addCustomDatetimeFunction('now', 'DoctrineExtensions\\Query\\Mysql\\Now');
        $d->addCustomDatetimeFunction('month', 'DoctrineExtensions\\Query\\Mysql\\Month');
        $d->addCustomDatetimeFunction('monthname', 'DoctrineExtensions\\Query\\Mysql\\MonthName');
        $d->addCustomDatetimeFunction('second', 'DoctrineExtensions\\Query\\Mysql\\Second');
        $d->addCustomDatetimeFunction('sectotime', 'DoctrineExtensions\\Query\\Mysql\\SecToTime');
        $d->addCustomDatetimeFunction('strtodate', 'DoctrineExtensions\\Query\\Mysql\\StrToDate');
        $d->addCustomDatetimeFunction('time', 'DoctrineExtensions\\Query\\Mysql\\Time');
        $d->addCustomDatetimeFunction('timediff', 'DoctrineExtensions\\Query\\Mysql\\TimeDiff');
        $d->addCustomDatetimeFunction('timestampadd', 'DoctrineExtensions\\Query\\Mysql\\TimestampAdd');
        $d->addCustomDatetimeFunction('timestampdiff', 'DoctrineExtensions\\Query\\Mysql\\TimestampDiff');
        $d->addCustomDatetimeFunction('timetosec', 'DoctrineExtensions\\Query\\Mysql\\TimeToSec');
        $d->addCustomDatetimeFunction('week', 'DoctrineExtensions\\Query\\Mysql\\Week');
        $d->addCustomDatetimeFunction('weekday', 'DoctrineExtensions\\Query\\Mysql\\WeekDay');
        $d->addCustomDatetimeFunction('year', 'DoctrineExtensions\\Query\\Mysql\\Year');
        $d->addCustomDatetimeFunction('yearmonth', 'DoctrineExtensions\\Query\\Mysql\\YearMonth');
        $d->addCustomDatetimeFunction('yearweek', 'DoctrineExtensions\\Query\\Mysql\\YearWeek');
        $d->addCustomDatetimeFunction('unix_timestamp', 'DoctrineExtensions\\Query\\Mysql\\UnixTimestamp');
        $d->addCustomDatetimeFunction('utc_timestamp', 'DoctrineExtensions\\Query\\Mysql\\UtcTimestamp');
        $d->addCustomDatetimeFunction('extract', 'DoctrineExtensions\\Query\\Mysql\\Extract');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create($this->get('doctrine.dbal.default_connection'), $d);

        $this->get('doctrine.orm.default_manager_configurator')->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor($this->get('doctrine.orm.default_entity_manager')->getMetadataFactory());
    }

    /**
     * Gets the public 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the public 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }

    /**
     * Gets the public 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }

    /**
     * Gets the public 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        return $this->services['doctrine.query_dql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        return $this->services['doctrine.query_sql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        return $this->services['doctrine.schema_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        return $this->services['doctrine.schema_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        return $this->services['doctrine.schema_update_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();
    }

    /**
     * Gets the public 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        return $this->services['doctrine.schema_validate_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();
    }

    /**
     * Gets the public 'doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getDoctrineCache_ContainsCommandService()
    {
        return $this->services['doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /**
     * Gets the public 'doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getDoctrineCache_DeleteCommandService()
    {
        return $this->services['doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /**
     * Gets the public 'doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getDoctrineCache_FlushCommandService()
    {
        return $this->services['doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_6d6b40480a2c23a8189b275de8144010c8531ea8fdb8d95bc97334e83b9d3b22');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_6d6b40480a2c23a8189b275de8144010c8531ea8fdb8d95bc97334e83b9d3b22');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_6d6b40480a2c23a8189b275de8144010c8531ea8fdb8d95bc97334e83b9d3b22');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getDoctrineCache_StatsCommandService()
    {
        return $this->services['doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /**
     * Gets the public 'file_locator' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Config\FileLocator
     */
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), ($this->targetDirs[2].'/Resources'));
    }

    /**
     * Gets the public 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the public 'form.csrf_provider' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter
     *
     * @deprecated The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.
     */
    protected function getForm_CsrfProviderService()
    {
        @trigger_error('The "form.csrf_provider" service is deprecated since Symfony 2.4 and will be removed in 3.0. Use the "security.csrf.token_manager" service instead.', E_USER_DEPRECATED);

        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfTokenManagerAdapter($this->get('security.csrf.token_manager'));
    }

    /**
     * Gets the public 'form.factory' shared service.
     *
     * @return \Symfony\Component\Form\FormFactory
     */
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the public 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('app_user_registration' => 'app.form.registration', 'PS\\UtilisateurBundle\\Form\\RegistrationType' => 'app.form.registration', 'app.commande_pack_type' => 'app.commande_pack_type', 'PS\\GestionBundle\\Form\\CommandePackType' => 'app.commande_pack_type', 'app_user_change_password' => 'app.form.change_password', 'PS\\UtilisateurBundle\\Form\\ChangePasswordFormType' => 'app.form.change_password', 'app_user_profile' => 'app.form.profile_form', 'PS\\UtilisateurBundle\\Form\\ProfileType' => 'app.form.profile_form', 'app_user_reset_password' => 'app.form.reset_password', 'PS\\UtilisateurBundle\\Form\\ResettingFormType' => 'app.form.reset_password', 'app.constance_type' => 'app.constance_type', 'PS\\GestionBundle\\Form\\ConstanteType' => 'app.constance_type', 'app.corporate_type' => 'app.corporate_type', 'PS\\GestionBundle\\Form\\CorporateType' => 'app.corporate_type', 'app.fiche_type' => 'app.fiche_type', 'PS\\SpecialiteBundle\\Form\\FicheType' => 'app.fiche_type', 'app.consultation_type' => 'app.consultation_type', 'PS\\GestionBundle\\Form\\ConsultationType' => 'app.consultation_type', 'app.rdv_type' => 'app.rdv_type', 'PS\\GestionBundle\\Form\\RendezVousType' => 'app.rdv_type', 'app.utilisateur_type' => 'app.utilisateur_type', 'PS\\UtilisateurBundle\\Form\\UtilisateurType' => 'app.utilisateur_type', 'app.medecin_type' => 'app.medecin_type', 'PS\\GestionBundle\\Form\\MedecinType' => 'app.medecin_type', 'form' => 'form.type.form', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => 'form.type.form', 'birthday' => 'form.type.birthday', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\BirthdayType' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CheckboxType' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => 'form.type.choice', 'collection' => 'form.type.collection', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType' => 'form.type.collection', 'country' => 'form.type.country', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CountryType' => 'form.type.country', 'date' => 'form.type.date', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType' => 'form.type.date', 'datetime' => 'form.type.datetime', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType' => 'form.type.datetime', 'email' => 'form.type.email', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\EmailType' => 'form.type.email', 'file' => 'form.type.file', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => 'form.type.file', 'hidden' => 'form.type.hidden', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType' => 'form.type.hidden', 'integer' => 'form.type.integer', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType' => 'form.type.integer', 'language' => 'form.type.language', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LanguageType' => 'form.type.language', 'locale' => 'form.type.locale', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType' => 'form.type.locale', 'money' => 'form.type.money', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\MoneyType' => 'form.type.money', 'number' => 'form.type.number', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType' => 'form.type.number', 'password' => 'form.type.password', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => 'form.type.password', 'percent' => 'form.type.percent', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PercentType' => 'form.type.percent', 'radio' => 'form.type.radio', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RadioType' => 'form.type.radio', 'range' => 'form.type.range', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RangeType' => 'form.type.range', 'repeated' => 'form.type.repeated', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => 'form.type.repeated', 'search' => 'form.type.search', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SearchType' => 'form.type.search', 'textarea' => 'form.type.textarea', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => 'form.type.textarea', 'text' => 'form.type.text', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType' => 'form.type.text', 'time' => 'form.type.time', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimeType' => 'form.type.time', 'timezone' => 'form.type.timezone', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TimezoneType' => 'form.type.timezone', 'url' => 'form.type.url', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType' => 'form.type.url', 'button' => 'form.type.button', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType' => 'form.type.button', 'submit' => 'form.type.submit', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => 'form.type.submit', 'reset' => 'form.type.reset', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ResetType' => 'form.type.reset', 'currency' => 'form.type.currency', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\CurrencyType' => 'form.type.currency', 'entity' => 'form.type.entity', 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => 'form.type.entity', 'fos_user_username' => 'fos_user.username_form_type', 'FOS\\UserBundle\\Form\\Type\\UsernameFormType' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'FOS\\UserBundle\\Form\\Type\\ProfileFormType' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'FOS\\UserBundle\\Form\\Type\\ResettingFormType' => 'fos_user.resetting.form.type', 'fos_user_group' => 'fos_user.group.form.type', 'FOS\\UserBundle\\Form\\Type\\GroupFormType' => 'fos_user.group.form.type', 'collot_datetime' => 'sc_datetimepicker.form.type.datetime', 'SC\\DatetimepickerBundle\\Form\\Type\\DatetimeType' => 'sc_datetimepicker.form.type.datetime'), array('Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType' => array(0 => 'app.textarea_type_extension'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => array(0 => 'form.type_extension.form.transformation_failure_handling', 1 => 'form.type_extension.form.http_foundation', 2 => 'form.type_extension.form.validator', 3 => 'form.type_extension.upload.validator', 4 => 'form.type_extension.csrf', 5 => 'fos_rest.form.extension.csrf_disable'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => array(0 => 'form.type_extension.repeated.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => array(0 => 'form.type_extension.submit.validator'), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => array(0 => 'ivory.base64_file.form.extension')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }

    /**
     * Gets the public 'form.resolved_type_factory' shared service.
     *
     * @return \Symfony\Component\Form\ResolvedFormTypeFactory
     */
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }

    /**
     * Gets the public 'form.type.birthday' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\BirthdayType
     */
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }

    /**
     * Gets the public 'form.type.button' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ButtonType
     */
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }

    /**
     * Gets the public 'form.type.checkbox' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CheckboxType
     */
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }

    /**
     * Gets the public 'form.type.choice' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ChoiceType
     */
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType(new \Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator(new \Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator(new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory(), $this->get('property_accessor'))));
    }

    /**
     * Gets the public 'form.type.collection' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CollectionType
     */
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }

    /**
     * Gets the public 'form.type.country' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CountryType
     */
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }

    /**
     * Gets the public 'form.type.currency' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\CurrencyType
     */
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }

    /**
     * Gets the public 'form.type.date' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateType
     */
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }

    /**
     * Gets the public 'form.type.datetime' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\DateTimeType
     */
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }

    /**
     * Gets the public 'form.type.email' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\EmailType
     */
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }

    /**
     * Gets the public 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }

    /**
     * Gets the public 'form.type.file' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FileType
     */
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }

    /**
     * Gets the public 'form.type.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\FormType
     */
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }

    /**
     * Gets the public 'form.type.hidden' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\HiddenType
     */
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }

    /**
     * Gets the public 'form.type.integer' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\IntegerType
     */
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }

    /**
     * Gets the public 'form.type.language' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LanguageType
     */
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }

    /**
     * Gets the public 'form.type.locale' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\LocaleType
     */
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }

    /**
     * Gets the public 'form.type.money' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\MoneyType
     */
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }

    /**
     * Gets the public 'form.type.number' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\NumberType
     */
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }

    /**
     * Gets the public 'form.type.password' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PasswordType
     */
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }

    /**
     * Gets the public 'form.type.percent' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\PercentType
     */
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }

    /**
     * Gets the public 'form.type.radio' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RadioType
     */
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }

    /**
     * Gets the public 'form.type.range' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RangeType
     */
    protected function getForm_Type_RangeService()
    {
        return $this->services['form.type.range'] = new \Symfony\Component\Form\Extension\Core\Type\RangeType();
    }

    /**
     * Gets the public 'form.type.repeated' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\RepeatedType
     */
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }

    /**
     * Gets the public 'form.type.reset' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\ResetType
     */
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }

    /**
     * Gets the public 'form.type.search' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SearchType
     */
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }

    /**
     * Gets the public 'form.type.submit' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\SubmitType
     */
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }

    /**
     * Gets the public 'form.type.text' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextType
     */
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }

    /**
     * Gets the public 'form.type.textarea' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TextareaType
     */
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }

    /**
     * Gets the public 'form.type.time' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimeType
     */
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }

    /**
     * Gets the public 'form.type.timezone' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TimezoneType
     */
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }

    /**
     * Gets the public 'form.type.url' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\UrlType
     */
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }

    /**
     * Gets the public 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('security.csrf.token_manager'), true, '_token', $this->get('translator.default'), 'validators', $this->get('form.server_params'));
    }

    /**
     * Gets the public 'form.type_extension.form.http_foundation' shared service.
     *
     * @return \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension
     */
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension(new \Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler($this->get('form.server_params')));
    }

    /**
     * Gets the public 'form.type_extension.form.transformation_failure_handling' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension
     */
    protected function getForm_TypeExtension_Form_TransformationFailureHandlingService()
    {
        return $this->services['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension($this->get('translator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'form.type_extension.form.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }

    /**
     * Gets the public 'form.type_extension.repeated.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }

    /**
     * Gets the public 'form.type_extension.submit.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension
     */
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }

    /**
     * Gets the public 'form.type_extension.upload.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension
     */
    protected function getForm_TypeExtension_Upload_ValidatorService()
    {
        return $this->services['form.type_extension.upload.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\UploadValidatorExtension($this->get('translator'), 'validators');
    }

    /**
     * Gets the public 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }

    /**
     * Gets the public 'form.type_guesser.validator' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser
     */
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator'));
    }

    /**
     * Gets the public 'fos\restbundle\view\viewhandlerinterface' shared service.
     *
     * @return \FOS\RestBundle\View\ViewHandler
     */
    protected function getFos_Restbundle_View_ViewhandlerinterfaceService()
    {
        $this->services['fos\\restbundle\\view\\viewhandlerinterface'] = $instance = new \FOS\RestBundle\View\ViewHandler($this->get('router'), $this->get('fos_rest.serializer'), $this->get('templating', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('request_stack'), array('json' => false, 'xml' => false, 'html' => true), 400, 204, false, array('html' => 302), 'twig');

        $instance->setSerializeNullStrategy(true);

        return $instance;
    }

    /**
     * Gets the public 'fos_js_routing.controller' shared service.
     *
     * @return \FOS\JsRoutingBundle\Controller\Controller
     */
    protected function getFosJsRouting_ControllerService()
    {
        return $this->services['fos_js_routing.controller'] = new \FOS\JsRoutingBundle\Controller\Controller($this->get('fos_js_routing.serializer'), $this->get('fos_js_routing.extractor'), array('enabled' => false), true);
    }

    /**
     * Gets the public 'fos_js_routing.dump_command' shared service.
     *
     * @return \FOS\JsRoutingBundle\Command\DumpCommand
     */
    protected function getFosJsRouting_DumpCommandService()
    {
        return $this->services['fos_js_routing.dump_command'] = new \FOS\JsRoutingBundle\Command\DumpCommand($this->get('fos_js_routing.extractor'), $this->get('fos_js_routing.serializer'), $this->targetDirs[2], NULL);
    }

    /**
     * Gets the public 'fos_js_routing.extractor' shared service.
     *
     * @return \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor
     */
    protected function getFosJsRouting_ExtractorService()
    {
        return $this->services['fos_js_routing.extractor'] = new \FOS\JsRoutingBundle\Extractor\ExposedRoutesExtractor($this->get('router'), array(), __DIR__, array('FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle', 'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle', 'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle', 'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle', 'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle', 'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle', 'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle', 'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle', 'AvanzuAdminThemeBundle' => 'Avanzu\\AdminThemeBundle\\AvanzuAdminThemeBundle', 'ParametreBundle' => 'PS\\ParametreBundle\\ParametreBundle', 'SiteBundle' => 'PS\\SiteBundle\\SiteBundle', 'UtilisateurBundle' => 'PS\\UtilisateurBundle\\UtilisateurBundle', 'GestionBundle' => 'PS\\GestionBundle\\GestionBundle', 'APYDataGridBundle' => 'APY\\DataGridBundle\\APYDataGridBundle', 'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle', 'EnseparHtml2pdfBundle' => 'Ensepar\\Html2pdfBundle\\EnseparHtml2pdfBundle', 'ObHighchartsBundle' => 'Ob\\HighchartsBundle\\ObHighchartsBundle', 'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle', 'PSApiBundle' => 'PS\\ApiBundle\\PSApiBundle', 'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle', 'LexikJWTAuthenticationBundle' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\LexikJWTAuthenticationBundle', 'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle', 'IvoryBase64FileBundle' => 'Ivory\\Base64FileBundle\\IvoryBase64FileBundle', 'SCDatetimepickerBundle' => 'SC\\DatetimepickerBundle\\SCDatetimepickerBundle', 'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle', 'PhpSpreadsheetBundle' => 'Yectep\\PhpSpreadsheetBundle\\PhpSpreadsheetBundle', 'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle', 'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle', 'PSSpecialiteBundle' => 'PS\\SpecialiteBundle\\PSSpecialiteBundle', 'MobileBundle' => 'PS\\MobileBundle\\MobileBundle'));
    }

    /**
     * Gets the public 'fos_js_routing.router_debug_exposed_command' shared service.
     *
     * @return \FOS\JsRoutingBundle\Command\RouterDebugExposedCommand
     */
    protected function getFosJsRouting_RouterDebugExposedCommandService()
    {
        return $this->services['fos_js_routing.router_debug_exposed_command'] = new \FOS\JsRoutingBundle\Command\RouterDebugExposedCommand($this->get('fos_js_routing.extractor'), $this->get('router'));
    }

    /**
     * Gets the public 'fos_js_routing.serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getFosJsRouting_SerializerService()
    {
        return $this->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \FOS\JsRoutingBundle\Serializer\Normalizer\RouteCollectionNormalizer(), 1 => new \FOS\JsRoutingBundle\Serializer\Normalizer\RoutesResponseNormalizer(), 2 => new \FOS\JsRoutingBundle\Serializer\Denormalizer\RouteCollectionDenormalizer()), array('json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()));
    }

    /**
     * Gets the public 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->services['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener($this->get('fos_rest.decoder_provider'), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.decoder.json' shared service.
     *
     * @return \FOS\RestBundle\Decoder\JsonDecoder
     */
    protected function getFosRest_Decoder_JsonService()
    {
        return $this->services['fos_rest.decoder.json'] = new \FOS\RestBundle\Decoder\JsonDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder.jsontoform' shared service.
     *
     * @return \FOS\RestBundle\Decoder\JsonToFormDecoder
     */
    protected function getFosRest_Decoder_JsontoformService()
    {
        return $this->services['fos_rest.decoder.jsontoform'] = new \FOS\RestBundle\Decoder\JsonToFormDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder.xml' shared service.
     *
     * @return \FOS\RestBundle\Decoder\XmlDecoder
     */
    protected function getFosRest_Decoder_XmlService()
    {
        return $this->services['fos_rest.decoder.xml'] = new \FOS\RestBundle\Decoder\XmlDecoder();
    }

    /**
     * Gets the public 'fos_rest.decoder_provider' shared service.
     *
     * @return \FOS\RestBundle\Decoder\ContainerDecoderProvider
     */
    protected function getFosRest_DecoderProviderService()
    {
        return $this->services['fos_rest.decoder_provider'] = new \FOS\RestBundle\Decoder\ContainerDecoderProvider($this, array('json' => 'fos_rest.decoder.json', 'xml' => 'fos_rest.decoder.xml'));
    }

    /**
     * Gets the public 'fos_rest.exception.controller' shared service.
     *
     * @return \FOS\RestBundle\Controller\ExceptionController
     */
    protected function getFosRest_Exception_ControllerService()
    {
        return $this->services['fos_rest.exception.controller'] = new \FOS\RestBundle\Controller\ExceptionController($this->get('fos\\restbundle\\view\\viewhandlerinterface'), $this->get('fos_rest.exception.codes_map'), true);
    }

    /**
     * Gets the public 'fos_rest.exception.twig_controller' shared service.
     *
     * @return \FOS\RestBundle\Controller\TwigExceptionController
     */
    protected function getFosRest_Exception_TwigControllerService()
    {
        return $this->services['fos_rest.exception.twig_controller'] = new \FOS\RestBundle\Controller\TwigExceptionController($this->get('fos\\restbundle\\view\\viewhandlerinterface'), $this->get('fos_rest.exception.codes_map'), true, $this->get('templating'));
    }

    /**
     * Gets the public 'fos_rest.exception_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ExceptionListener
     */
    protected function getFosRest_ExceptionListenerService()
    {
        return $this->services['fos_rest.exception_listener'] = new \FOS\RestBundle\EventListener\ExceptionListener('fos_rest.exception.twig_controller:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'fos_rest.form.extension.csrf_disable' shared service.
     *
     * @return \FOS\RestBundle\Form\Extension\DisableCSRFExtension
     */
    protected function getFosRest_Form_Extension_CsrfDisableService()
    {
        return $this->services['fos_rest.form.extension.csrf_disable'] = new \FOS\RestBundle\Form\Extension\DisableCSRFExtension($this->get('security.token_storage'), 'ROLE_API', $this->get('security.authorization_checker'));
    }

    /**
     * Gets the public 'fos_rest.format_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\FormatListener
     */
    protected function getFosRest_FormatListenerService()
    {
        return $this->services['fos_rest.format_listener'] = new \FOS\RestBundle\EventListener\FormatListener($this->get('fos_rest.format_negotiator'));
    }

    /**
     * Gets the public 'fos_rest.format_negotiator' shared service.
     *
     * @return \FOS\RestBundle\Negotiation\FormatNegotiator
     */
    protected function getFosRest_FormatNegotiatorService()
    {
        $this->services['fos_rest.format_negotiator'] = $instance = new \FOS\RestBundle\Negotiation\FormatNegotiator($this->get('request_stack'));

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/', NULL, NULL, NULL, array()), array('priorities' => array(0 => 'json'), 'fallback_format' => 'json', 'methods' => NULL, 'attributes' => array(), 'stop' => false, 'prefer_extension' => '2.0'));
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/', NULL, NULL, NULL, array()), array('priorities' => array(0 => 'text/html', 1 => '*/*'), 'fallback_format' => 'html', 'prefer_extension' => '2.0', 'methods' => NULL, 'attributes' => array(), 'stop' => false));

        return $instance;
    }

    /**
     * Gets the public 'fos_rest.inflector' shared service.
     *
     * @return \FOS\RestBundle\Inflector\DoctrineInflector
     */
    protected function getFosRest_InflectorService()
    {
        return $this->services['fos_rest.inflector'] = new \FOS\RestBundle\Inflector\DoctrineInflector();
    }

    /**
     * Gets the public 'fos_rest.normalizer.camel_keys' shared service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizer
     */
    protected function getFosRest_Normalizer_CamelKeysService()
    {
        return $this->services['fos_rest.normalizer.camel_keys'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizer();
    }

    /**
     * Gets the public 'fos_rest.normalizer.camel_keys_with_leading_underscore' shared service.
     *
     * @return \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore
     */
    protected function getFosRest_Normalizer_CamelKeysWithLeadingUnderscoreService()
    {
        return $this->services['fos_rest.normalizer.camel_keys_with_leading_underscore'] = new \FOS\RestBundle\Normalizer\CamelKeysNormalizerWithLeadingUnderscore();
    }

    /**
     * Gets the public 'fos_rest.param_fetcher_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ParamFetcherListener
     */
    protected function getFosRest_ParamFetcherListenerService()
    {
        return $this->services['fos_rest.param_fetcher_listener'] = new \FOS\RestBundle\EventListener\ParamFetcherListener($this->get('fos_rest.request.param_fetcher'), false);
    }

    /**
     * Gets the public 'fos_rest.request.param_fetcher' shared service.
     *
     * @return \FOS\RestBundle\Request\ParamFetcher
     */
    protected function getFosRest_Request_ParamFetcherService()
    {
        return $this->services['fos_rest.request.param_fetcher'] = new \FOS\RestBundle\Request\ParamFetcher($this, $this->get('fos_rest.request.param_fetcher.reader'), $this->get('request_stack'), $this->get('validator', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'fos_rest.serializer' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSSerializerAdapter
     */
    protected function getFosRest_SerializerService($lazyLoad = true)
    {
        return $this->services['fos_rest.serializer'] = new \FOS\RestBundle\Serializer\JMSSerializerAdapter($this->get('jms_serializer'), $this->get('jms_serializer.serialization_context_factory'), $this->get('jms_serializer.deserialization_context_factory'));
    }

    /**
     * Gets the public 'fos_rest.serializer.exception_normalizer.jms' shared service.
     *
     * @return \FOS\RestBundle\Serializer\Normalizer\ExceptionHandler
     */
    protected function getFosRest_Serializer_ExceptionNormalizer_JmsService()
    {
        return $this->services['fos_rest.serializer.exception_normalizer.jms'] = new \FOS\RestBundle\Serializer\Normalizer\ExceptionHandler(new \FOS\RestBundle\Util\ExceptionValueMap(array('Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException' => true)), true);
    }

    /**
     * Gets the public 'fos_rest.serializer.form_error_handler' shared service.
     *
     * @return \FOS\RestBundle\Serializer\Normalizer\FormErrorHandler
     */
    protected function getFosRest_Serializer_FormErrorHandlerService()
    {
        return $this->services['fos_rest.serializer.form_error_handler'] = new \FOS\RestBundle\Serializer\Normalizer\FormErrorHandler(new \JMS\Serializer\Handler\FormErrorHandler($this->get('translator', ContainerInterface::NULL_ON_INVALID_REFERENCE), 'validators'));
    }

    /**
     * Gets the public 'fos_rest.versioning.listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\VersionListener
     */
    protected function getFosRest_Versioning_ListenerService()
    {
        $a = new \FOS\RestBundle\Version\ChainVersionResolver(array());
        $a->addResolver(new \FOS\RestBundle\Version\Resolver\QueryParameterVersionResolver('version'));
        $a->addResolver(new \FOS\RestBundle\Version\Resolver\HeaderVersionResolver('X-Accept-Version'));
        $a->addResolver(new \FOS\RestBundle\Version\Resolver\MediaTypeVersionResolver('/(v|version)=(?P<version>[0-9\\.]+)/'));

        return $this->services['fos_rest.versioning.listener'] = new \FOS\RestBundle\EventListener\VersionListener($this->get('fos\\restbundle\\view\\viewhandlerinterface'), $a, NULL);
    }

    /**
     * Gets the public 'fos_rest.view_response_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ViewResponseListener
     */
    protected function getFosRest_ViewResponseListenerService()
    {
        return $this->services['fos_rest.view_response_listener'] = new \FOS\RestBundle\EventListener\ViewResponseListener($this->get('fos\\restbundle\\view\\viewhandlerinterface'), true);
    }

    /**
     * Gets the public 'fos_user.change_password.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ChangePasswordController
     */
    protected function getFosUser_ChangePassword_ControllerService()
    {
        $this->services['fos_user.change_password.controller'] = $instance = new \FOS\UserBundle\Controller\ChangePasswordController($this->get('debug.event_dispatcher'), $this->get('fos_user.change_password.form.factory'), $this->get('fos_user.user_manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.change_password.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_ChangePassword_Form_FactoryService()
    {
        return $this->services['fos_user.change_password.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_change_password_form', 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', array(0 => 'ChangePassword', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.change_password.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ChangePasswordFormType
     */
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType('PS\\UtilisateurBundle\\Entity\\Utilisateur');
    }

    /**
     * Gets the public 'fos_user.command.activate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\ActivateUserCommand
     */
    protected function getFosUser_Command_ActivateUserService()
    {
        return $this->services['fos_user.command.activate_user'] = new \FOS\UserBundle\Command\ActivateUserCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.command.change_password' shared service.
     *
     * @return \FOS\UserBundle\Command\ChangePasswordCommand
     */
    protected function getFosUser_Command_ChangePasswordService()
    {
        return $this->services['fos_user.command.change_password'] = new \FOS\UserBundle\Command\ChangePasswordCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.command.create_user' shared service.
     *
     * @return \FOS\UserBundle\Command\CreateUserCommand
     */
    protected function getFosUser_Command_CreateUserService()
    {
        return $this->services['fos_user.command.create_user'] = new \FOS\UserBundle\Command\CreateUserCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.command.deactivate_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DeactivateUserCommand
     */
    protected function getFosUser_Command_DeactivateUserService()
    {
        return $this->services['fos_user.command.deactivate_user'] = new \FOS\UserBundle\Command\DeactivateUserCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.command.demote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\DemoteUserCommand
     */
    protected function getFosUser_Command_DemoteUserService()
    {
        return $this->services['fos_user.command.demote_user'] = new \FOS\UserBundle\Command\DemoteUserCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.command.promote_user' shared service.
     *
     * @return \FOS\UserBundle\Command\PromoteUserCommand
     */
    protected function getFosUser_Command_PromoteUserService()
    {
        return $this->services['fos_user.command.promote_user'] = new \FOS\UserBundle\Command\PromoteUserCommand($this->get('fos_user.util.user_manipulator'));
    }

    /**
     * Gets the public 'fos_user.group.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\GroupController
     */
    protected function getFosUser_Group_ControllerService()
    {
        $this->services['fos_user.group.controller'] = $instance = new \FOS\UserBundle\Controller\GroupController($this->get('debug.event_dispatcher'), $this->get('fos_user.group.form.factory'), $this->get('fos_user.group_manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.group.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Group_Form_FactoryService()
    {
        return $this->services['fos_user.group.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_group_form', 'FOS\\UserBundle\\Form\\Type\\GroupFormType', array(0 => 'Registration', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.group.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\GroupFormType
     */
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->services['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('PS\\UtilisateurBundle\\Entity\\Groupe');
    }

    /**
     * Gets the public 'fos_user.group_manager' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\GroupManager
     */
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager($this->get('fos_user.object_manager'), 'PS\\UtilisateurBundle\\Entity\\Groupe');
    }

    /**
     * Gets the public 'fos_user.listener.authentication' shared service.
     *
     * @return \FOS\UserBundle\EventListener\AuthenticationListener
     */
    protected function getFosUser_Listener_AuthenticationService()
    {
        return $this->services['fos_user.listener.authentication'] = new \FOS\UserBundle\EventListener\AuthenticationListener($this->get('fos_user.security.login_manager'), 'main');
    }

    /**
     * Gets the public 'fos_user.listener.flash' shared service.
     *
     * @return \FOS\UserBundle\EventListener\FlashListener
     */
    protected function getFosUser_Listener_FlashService()
    {
        return $this->services['fos_user.listener.flash'] = new \FOS\UserBundle\EventListener\FlashListener($this->get('session'), $this->get('translator'));
    }

    /**
     * Gets the public 'fos_user.listener.resetting' shared service.
     *
     * @return \FOS\UserBundle\EventListener\ResettingListener
     */
    protected function getFosUser_Listener_ResettingService()
    {
        return $this->services['fos_user.listener.resetting'] = new \FOS\UserBundle\EventListener\ResettingListener($this->get('router'), 86400);
    }

    /**
     * Gets the public 'fos_user.mailer' shared service.
     *
     * @return \FOS\UserBundle\Mailer\Mailer
     */
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => '@FOSUser/Registration/email.txt.twig', 'resetting.template' => '@FOSUser/Resetting/email.txt.twig', 'from_email' => array('confirmation' => array('info@pass-sante.net' => 'PASS SANTE MOUSSO'), 'resetting' => array('info@pass-sante.net' => 'PASS SANTE MOUSSO'))));
    }

    /**
     * Gets the public 'fos_user.profile.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ProfileController
     */
    protected function getFosUser_Profile_ControllerService()
    {
        $this->services['fos_user.profile.controller'] = $instance = new \FOS\UserBundle\Controller\ProfileController($this->get('debug.event_dispatcher'), $this->get('fos_user.profile.form.factory'), $this->get('fos_user.user_manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.profile.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Profile_Form_FactoryService()
    {
        return $this->services['fos_user.profile.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_profile_form', 'app_user_profile_edit', array(0 => 'Default', 1 => 'Profile'));
    }

    /**
     * Gets the public 'fos_user.profile.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ProfileFormType
     */
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('PS\\UtilisateurBundle\\Entity\\Utilisateur');
    }

    /**
     * Gets the public 'fos_user.registration.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\RegistrationController
     */
    protected function getFosUser_Registration_ControllerService()
    {
        $this->services['fos_user.registration.controller'] = $instance = new \FOS\UserBundle\Controller\RegistrationController($this->get('debug.event_dispatcher'), $this->get('fos_user.registration.form.factory'), $this->get('fos_user.user_manager'), $this->get('security.token_storage'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.registration.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Registration_Form_FactoryService()
    {
        return $this->services['fos_user.registration.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_registration_form', 'app_user_registration', array(0 => 'Default', 1 => 'Registration'));
    }

    /**
     * Gets the public 'fos_user.registration.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\RegistrationFormType
     */
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('PS\\UtilisateurBundle\\Entity\\Utilisateur');
    }

    /**
     * Gets the public 'fos_user.resetting.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\ResettingController
     */
    protected function getFosUser_Resetting_ControllerService()
    {
        $this->services['fos_user.resetting.controller'] = $instance = new \FOS\UserBundle\Controller\ResettingController($this->get('debug.event_dispatcher'), $this->get('fos_user.resetting.form.factory'), $this->get('fos_user.user_manager'), $this->get('fos_user.util.token_generator'), $this->get('fos_user.mailer'), 7200);

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.resetting.form.factory' shared service.
     *
     * @return \FOS\UserBundle\Form\Factory\FormFactory
     */
    protected function getFosUser_Resetting_Form_FactoryService()
    {
        return $this->services['fos_user.resetting.form.factory'] = new \FOS\UserBundle\Form\Factory\FormFactory($this->get('form.factory'), 'fos_user_resetting_form', 'app_user_reset_password', array(0 => 'ResetPassword', 1 => 'Default'));
    }

    /**
     * Gets the public 'fos_user.resetting.form.type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\ResettingFormType
     */
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType('PS\\UtilisateurBundle\\Entity\\Utilisateur');
    }

    /**
     * Gets the public 'fos_user.security.controller' shared service.
     *
     * @return \FOS\UserBundle\Controller\SecurityController
     */
    protected function getFosUser_Security_ControllerService()
    {
        $this->services['fos_user.security.controller'] = $instance = new \FOS\UserBundle\Controller\SecurityController($this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'fos_user.security.interactive_login_listener' shared service.
     *
     * @return \FOS\UserBundle\EventListener\LastLoginListener
     */
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\EventListener\LastLoginListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the public 'fos_user.security.login_manager' shared service.
     *
     * @return \FOS\UserBundle\Security\LoginManager
     */
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.token_storage'), $this->get('security.user_checker.login'), $this->get('security.authentication.session_strategy.cnrao'), $this->get('request_stack'), $this->get('security.authentication.rememberme.services.simplehash.main'));
    }

    /**
     * Gets the public 'fos_user.user_manager' shared service.
     *
     * @return \FOS\UserBundle\Doctrine\UserManager
     */
    protected function getFosUser_UserManagerService()
    {
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('fos_user.util.password_updater'), $this->get('fos_user.util.canonical_fields_updater'), $this->get('fos_user.object_manager'), 'PS\\UtilisateurBundle\\Entity\\Utilisateur');
    }

    /**
     * Gets the public 'fos_user.username_form_type' shared service.
     *
     * @return \FOS\UserBundle\Form\Type\UsernameFormType
     */
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }

    /**
     * Gets the public 'fos_user.util.email_canonicalizer' shared service.
     *
     * @return \FOS\UserBundle\Util\Canonicalizer
     */
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }

    /**
     * Gets the public 'fos_user.util.token_generator' shared service.
     *
     * @return \FOS\UserBundle\Util\TokenGenerator
     */
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator();
    }

    /**
     * Gets the public 'fos_user.util.user_manipulator' shared service.
     *
     * @return \FOS\UserBundle\Util\UserManipulator
     */
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'), $this->get('debug.event_dispatcher'), $this->get('request_stack'));
    }

    /**
     * Gets the public 'fragment.handler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler
     */
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler($this, $this->get('request_stack'), true);

        $instance->addRendererService('inline', 'fragment.renderer.inline');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');
        $instance->addRendererService('hinclude', 'fragment.renderer.hinclude');

        return $instance;
    }

    /**
     * Gets the public 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener($this->get('uri_signer'), '/_fragment');
    }

    /**
     * Gets the public 'fragment.renderer.hinclude' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer
     */
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer($this->get('twig'), $this->get('uri_signer'), NULL);

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'fragment.renderer.inline' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer
     */
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('debug.event_dispatcher'));

        $instance->setFragmentPath('/_fragment');

        return $instance;
    }

    /**
     * Gets the public 'grid' service.
     *
     * @return \APY\DataGridBundle\Grid\Grid
     */
    protected function getGridService()
    {
        $instance = new \APY\DataGridBundle\Grid\Grid($this);

        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\TextColumn());
        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\NumberColumn());
        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\BooleanColumn());
        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\DateTimeColumn());
        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\DateColumn());
        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\TimeColumn());
        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\ArrayColumn());
        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\SimpleArrayColumn());
        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\BlankColumn());
        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\RankColumn());
        $instance->addColumnExtension(new \APY\DataGridBundle\Grid\Column\JoinColumn());
        $instance->setLimits(array(0 => 50, 1 => 100, 2 => 200));
        $instance->setPersistence(false);
        $instance->setNoDataMessage('No data');
        $instance->setNoResultMessage('Aucune donnée disponible!');
        $instance->setActionsColumnSize(-1);
        $instance->setActionsColumnTitle('Actions');

        return $instance;
    }

    /**
     * Gets the public 'grid.manager' shared service.
     *
     * @return \APY\DataGridBundle\Grid\GridManager
     */
    protected function getGrid_ManagerService()
    {
        return $this->services['grid.manager'] = new \APY\DataGridBundle\Grid\GridManager($this);
    }

    /**
     * Gets the public 'grid.mapping.manager' service.
     *
     * @return \APY\DataGridBundle\Grid\Mapping\Metadata\Manager
     */
    protected function getGrid_Mapping_ManagerService()
    {
        $instance = new \APY\DataGridBundle\Grid\Mapping\Metadata\Manager($this->get('form.factory'));

        $instance->addDriver($this->get('grid.metadata.driver.annotation'), 1);

        return $instance;
    }

    /**
     * Gets the public 'grid.metadata.driver.annotation' shared service.
     *
     * @return \APY\DataGridBundle\Grid\Mapping\Driver\Annotation
     */
    protected function getGrid_Metadata_Driver_AnnotationService()
    {
        return $this->services['grid.metadata.driver.annotation'] = new \APY\DataGridBundle\Grid\Mapping\Driver\Annotation($this->get('annotation_reader'));
    }

    /**
     * Gets the public 'html2pdf_factory' shared service.
     *
     * @return \Ensepar\Html2pdfBundle\Factory\Html2pdfFactory
     */
    protected function getHtml2pdfFactoryService()
    {
        return $this->services['html2pdf_factory'] = new \Ensepar\Html2pdfBundle\Factory\Html2pdfFactory('P', 'A4', 'en', true, 'UTF-8', array(0 => 10, 1 => 15, 2 => 10, 3 => 15));
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('debug.event_dispatcher'), $this, $this->get('debug.controller_resolver'), $this->get('request_stack'), false);
    }

    /**
     * Gets the public 'ivory.base64_file.form.extension' shared service.
     *
     * @return \Ivory\Base64FileBundle\Form\Extension\Base64FileExtension
     */
    protected function getIvory_Base64File_Form_ExtensionService()
    {
        return $this->services['ivory.base64_file.form.extension'] = new \Ivory\Base64FileBundle\Form\Extension\Base64FileExtension(false);
    }

    /**
     * Gets the public 'jms_i18n_routing.cookie_setting_listener' shared service.
     *
     * @return \JMS\I18nRoutingBundle\EventListener\CookieSettingListener
     */
    protected function getJmsI18nRouting_CookieSettingListenerService()
    {
        return $this->services['jms_i18n_routing.cookie_setting_listener'] = new \JMS\I18nRoutingBundle\EventListener\CookieSettingListener('hl', 31536000, NULL, NULL, false, false);
    }

    /**
     * Gets the public 'jms_i18n_routing.loader' shared service.
     *
     * @return \JMS\I18nRoutingBundle\Router\I18nLoader
     */
    protected function getJmsI18nRouting_LoaderService()
    {
        return $this->services['jms_i18n_routing.loader'] = new \JMS\I18nRoutingBundle\Router\I18nLoader($this->get('jms_i18n_routing.route_exclusion_strategy'), new \JMS\I18nRoutingBundle\Router\DefaultPatternGenerationStrategy('prefix_except_default', $this->get('translator'), array(0 => 'fr', 1 => 'en', 2 => 'es'), __DIR__, 'routes', 'fr'));
    }

    /**
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    protected function getJmsSerializerService()
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_serializer.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', true);
        $a->setCache(new \Metadata\Cache\FileCache((__DIR__.'/jms_serializer')));

        $b = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher($this);
        $b->setListeners(array('serializer.pre_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL), 1 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerializeTypedProxy'), 1 => NULL, 2 => NULL), 2 => array(0 => array(0 => 'jms_serializer.doctrine_proxy_subscriber', 1 => 'onPreSerialize'), 1 => NULL, 2 => NULL)), 'serializer.post_serialize' => array(0 => array(0 => array(0 => 'jms_serializer.stopwatch_subscriber', 1 => 'onPostSerialize'), 1 => NULL, 2 => NULL))));

        $this->services['jms_serializer'] = $instance = new \JMS\Serializer\Serializer($a, $this->get('jms_serializer.handler_registry'), $this->get('jms_serializer.unserialize_object_constructor'), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_serialization_visitor'), 'xml' => $this->get('jms_serializer.xml_serialization_visitor'), 'yml' => $this->get('jms_serializer.yaml_serialization_visitor'))), new \PhpCollection\Map(array('json' => $this->get('jms_serializer.json_deserialization_visitor'), 'xml' => $this->get('jms_serializer.xml_deserialization_visitor'))), $b, NULL, $this->get('jms_serializer.expression_evaluator'));

        $instance->setSerializationContextFactory($this->get('jms_serializer.serialization_context_factory'));
        $instance->setDeserializationContextFactory($this->get('jms_serializer.deserialization_context_factory'));

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.accessor_strategy' shared service.
     *
     * @return \JMS\Serializer\Accessor\ExpressionAccessorStrategy
     */
    protected function getJmsSerializer_AccessorStrategyService()
    {
        return $this->services['jms_serializer.accessor_strategy'] = new \JMS\Serializer\Accessor\ExpressionAccessorStrategy($this->get('jms_serializer.expression_evaluator'), new \JMS\Serializer\Accessor\DefaultAccessorStrategy());
    }

    /**
     * Gets the public 'jms_serializer.array_collection_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ArrayCollectionHandler
     */
    protected function getJmsSerializer_ArrayCollectionHandlerService()
    {
        return $this->services['jms_serializer.array_collection_handler'] = new \JMS\Serializer\Handler\ArrayCollectionHandler(false);
    }

    /**
     * Gets the public 'jms_serializer.camel_case_naming_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy
     */
    protected function getJmsSerializer_CamelCaseNamingStrategyService()
    {
        return $this->services['jms_serializer.camel_case_naming_strategy'] = new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy();
    }

    /**
     * Gets the public 'jms_serializer.constraint_violation_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\ConstraintViolationHandler
     */
    protected function getJmsSerializer_ConstraintViolationHandlerService()
    {
        return $this->services['jms_serializer.constraint_violation_handler'] = new \JMS\Serializer\Handler\ConstraintViolationHandler();
    }

    /**
     * Gets the public 'jms_serializer.datetime_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\DateHandler
     */
    protected function getJmsSerializer_DatetimeHandlerService()
    {
        return $this->services['jms_serializer.datetime_handler'] = new \JMS\Serializer\Handler\DateHandler('Y-m-d\\TH:i:sP', 'UTC', true);
    }

    /**
     * Gets the public 'jms_serializer.deserialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_DeserializationContextFactoryService()
    {
        return $this->services['jms_serializer.deserialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.doctrine_proxy_subscriber' shared service.
     *
     * @return \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber
     */
    protected function getJmsSerializer_DoctrineProxySubscriberService()
    {
        return $this->services['jms_serializer.doctrine_proxy_subscriber'] = new \JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber(true, false);
    }

    /**
     * Gets the public 'jms_serializer.expression_evaluator' shared service.
     *
     * @return \JMS\Serializer\Expression\ExpressionEvaluator
     */
    protected function getJmsSerializer_ExpressionEvaluatorService()
    {
        $a = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $a->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        return $this->services['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator($a, array('container' => $this));
    }

    /**
     * Gets the public 'jms_serializer.handler_registry' shared service.
     *
     * @return \FOS\RestBundle\Serializer\JMSHandlerRegistry
     */
    protected function getJmsSerializer_HandlerRegistryService()
    {
        return $this->services['jms_serializer.handler_registry'] = new \FOS\RestBundle\Serializer\JMSHandlerRegistry($this->get('fos_rest.serializer.jms_handler_registry.inner'));
    }

    /**
     * Gets the public 'jms_serializer.json_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\JsonDeserializationVisitor
     */
    protected function getJmsSerializer_JsonDeserializationVisitorService()
    {
        return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor($this->get('jms_serializer.naming_strategy'));
    }

    /**
     * Gets the public 'jms_serializer.json_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\JsonSerializationVisitor
     */
    protected function getJmsSerializer_JsonSerializationVisitorService()
    {
        $this->services['jms_serializer.json_serialization_visitor'] = $instance = new \JMS\Serializer\JsonSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));

        $instance->setOptions(0);

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.metadata_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver
     */
    protected function getJmsSerializer_MetadataDriverService()
    {
        $a = new \Metadata\Driver\FileLocator(array());

        return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver($this->get('annotation_reader')))), $this->get('doctrine'));
    }

    /**
     * Gets the public 'jms_serializer.naming_strategy' shared service.
     *
     * @return \JMS\Serializer\Naming\CacheNamingStrategy
     */
    protected function getJmsSerializer_NamingStrategyService()
    {
        return $this->services['jms_serializer.naming_strategy'] = new \JMS\Serializer\Naming\CacheNamingStrategy($this->get('jms_serializer.camel_case_naming_strategy'));
    }

    /**
     * Gets the public 'jms_serializer.object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\DoctrineObjectConstructor
     */
    protected function getJmsSerializer_ObjectConstructorService()
    {
        return $this->services['jms_serializer.object_constructor'] = new \JMS\Serializer\Construction\DoctrineObjectConstructor($this->get('doctrine'), $this->get('jms_serializer.unserialize_object_constructor'), 'null');
    }

    /**
     * Gets the public 'jms_serializer.php_collection_handler' shared service.
     *
     * @return \JMS\Serializer\Handler\PhpCollectionHandler
     */
    protected function getJmsSerializer_PhpCollectionHandlerService()
    {
        return $this->services['jms_serializer.php_collection_handler'] = new \JMS\Serializer\Handler\PhpCollectionHandler();
    }

    /**
     * Gets the public 'jms_serializer.serialization_context_factory' shared service.
     *
     * @return \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory
     */
    protected function getJmsSerializer_SerializationContextFactoryService()
    {
        return $this->services['jms_serializer.serialization_context_factory'] = new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory();
    }

    /**
     * Gets the public 'jms_serializer.stopwatch_subscriber' shared service.
     *
     * @return \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber
     */
    protected function getJmsSerializer_StopwatchSubscriberService()
    {
        return $this->services['jms_serializer.stopwatch_subscriber'] = new \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber($this->get('debug.stopwatch'));
    }

    /**
     * Gets the public 'jms_serializer.templating.helper.serializer' shared service.
     *
     * @return \JMS\SerializerBundle\Templating\SerializerHelper
     */
    protected function getJmsSerializer_Templating_Helper_SerializerService()
    {
        return $this->services['jms_serializer.templating.helper.serializer'] = new \JMS\SerializerBundle\Templating\SerializerHelper($this->get('jms_serializer'));
    }

    /**
     * Gets the public 'jms_serializer.xml_deserialization_visitor' shared service.
     *
     * @return \JMS\Serializer\XmlDeserializationVisitor
     */
    protected function getJmsSerializer_XmlDeserializationVisitorService()
    {
        $this->services['jms_serializer.xml_deserialization_visitor'] = $instance = new \JMS\Serializer\XmlDeserializationVisitor($this->get('jms_serializer.naming_strategy'));

        $instance->setDoctypeWhitelist(array());

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.xml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\XmlSerializationVisitor
     */
    protected function getJmsSerializer_XmlSerializationVisitorService()
    {
        $this->services['jms_serializer.xml_serialization_visitor'] = $instance = new \JMS\Serializer\XmlSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));

        $instance->setFormatOutput(true);

        return $instance;
    }

    /**
     * Gets the public 'jms_serializer.yaml_serialization_visitor' shared service.
     *
     * @return \JMS\Serializer\YamlSerializationVisitor
     */
    protected function getJmsSerializer_YamlSerializationVisitorService()
    {
        return $this->services['jms_serializer.yaml_serialization_visitor'] = new \JMS\Serializer\YamlSerializationVisitor($this->get('jms_serializer.naming_strategy'), $this->get('jms_serializer.accessor_strategy'));
    }

    /**
     * Gets the public 'jms_translation.config_factory' shared service.
     *
     * @return \JMS\TranslationBundle\Translation\ConfigFactory
     */
    protected function getJmsTranslation_ConfigFactoryService()
    {
        return $this->services['jms_translation.config_factory'] = new \JMS\TranslationBundle\Translation\ConfigFactory(array());
    }

    /**
     * Gets the public 'jms_translation.controller.api_controller' shared service.
     *
     * @return \JMS\TranslationBundle\Controller\ApiController
     */
    protected function getJmsTranslation_Controller_ApiControllerService()
    {
        return $this->services['jms_translation.controller.api_controller'] = new \JMS\TranslationBundle\Controller\ApiController($this->get('jms_translation.config_factory'), $this->get('jms_translation.updater'));
    }

    /**
     * Gets the public 'jms_translation.controller.translate_controller' shared service.
     *
     * @return \JMS\TranslationBundle\Controller\TranslateController
     */
    protected function getJmsTranslation_Controller_TranslateControllerService()
    {
        $this->services['jms_translation.controller.translate_controller'] = $instance = new \JMS\TranslationBundle\Controller\TranslateController($this->get('jms_translation.config_factory'), $this->get('jms_translation.loader_manager'));

        $instance->setSourceLanguage('en');

        return $instance;
    }

    /**
     * Gets the public 'jms_translation.file_source_factory' shared service.
     *
     * @return \JMS\TranslationBundle\Translation\FileSourceFactory
     */
    protected function getJmsTranslation_FileSourceFactoryService()
    {
        return $this->services['jms_translation.file_source_factory'] = new \JMS\TranslationBundle\Translation\FileSourceFactory($this->targetDirs[2]);
    }

    /**
     * Gets the public 'jms_translation.loader_manager' shared service.
     *
     * @return \JMS\TranslationBundle\Translation\LoaderManager
     */
    protected function getJmsTranslation_LoaderManagerService()
    {
        return $this->services['jms_translation.loader_manager'] = new \JMS\TranslationBundle\Translation\LoaderManager(array('php' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.php')), 'yml' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.yml')), 'xlf' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.xliff')), 'xliff' => new \JMS\TranslationBundle\Translation\Loader\XliffLoader(), 'po' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.po')), 'mo' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.mo')), 'ts' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.qt')), 'csv' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.csv')), 'res' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.res')), 'dat' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.dat')), 'ini' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.ini')), 'json' => new \JMS\TranslationBundle\Translation\Loader\SymfonyLoaderAdapter($this->get('translation.loader.json'))));
    }

    /**
     * Gets the public 'jms_translation.twig_extension' shared service.
     *
     * @return \JMS\TranslationBundle\Twig\TranslationExtension
     */
    protected function getJmsTranslation_TwigExtensionService()
    {
        return $this->services['jms_translation.twig_extension'] = new \JMS\TranslationBundle\Twig\TranslationExtension($this->get('translator'), true);
    }

    /**
     * Gets the public 'jms_translation.updater' shared service.
     *
     * @return \JMS\TranslationBundle\Translation\Updater
     */
    protected function getJmsTranslation_UpdaterService()
    {
        $a = $this->get('logger');
        $b = $this->get('jms_translation.file_source_factory');
        $c = $this->get('twig');

        $d = new \Doctrine\Common\Annotations\DocParser();
        $d->setImports(array('desc' => 'JMS\\TranslationBundle\\Annotation\\Desc', 'meaning' => 'JMS\\TranslationBundle\\Annotation\\Meaning', 'ignore' => 'JMS\\TranslationBundle\\Annotation\\Ignore'));
        $d->setIgnoreNotImportedAnnotations(true);

        $e = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $e->setSourceLanguage('en');
        $e->setAddDate(true);
        $e->setAddReference(true);

        $f = new \JMS\TranslationBundle\Translation\Dumper\XliffDumper();
        $f->setSourceLanguage('en');
        $f->setAddDate(true);
        $f->setAddReference(true);

        return $this->services['jms_translation.updater'] = new \JMS\TranslationBundle\Translation\Updater($this->get('jms_translation.loader_manager'), new \JMS\TranslationBundle\Translation\ExtractorManager(new \JMS\TranslationBundle\Translation\Extractor\FileExtractor($c, $a, array(0 => new \JMS\TranslationBundle\Translation\Extractor\File\DefaultPhpFileExtractor($d, $b), 1 => new \JMS\TranslationBundle\Translation\Extractor\File\FormExtractor($d, $b), 2 => new \JMS\TranslationBundle\Translation\Extractor\File\TranslationContainerExtractor(), 3 => new \JMS\TranslationBundle\Translation\Extractor\File\TwigFileExtractor($c, $b), 4 => new \JMS\TranslationBundle\Translation\Extractor\File\ValidationExtractor($this->get('validator')), 5 => new \JMS\TranslationBundle\Translation\Extractor\File\AuthenticationMessagesExtractor($d, $b))), $a, array('jms_i18n_routing' => new \JMS\I18nRoutingBundle\Translation\RouteTranslationExtractor($this->get('router'), $this->get('jms_i18n_routing.route_exclusion_strategy')))), $a, new \JMS\TranslationBundle\Translation\FileWriter(array('php' => new \JMS\TranslationBundle\Translation\Dumper\PhpDumper(), 'xlf' => $e, 'po' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.po'), 'po'), 'mo' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.mo'), 'mo'), 'yml' => new \JMS\TranslationBundle\Translation\Dumper\YamlDumper(), 'ts' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.qt'), 'ts'), 'csv' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.csv'), 'csv'), 'ini' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.ini'), 'ini'), 'json' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.json'), 'json'), 'res' => new \JMS\TranslationBundle\Translation\Dumper\SymfonyDumperAdapter($this->get('translation.dumper.res'), 'res'), 'xliff' => $f)));
    }

    /**
     * Gets the public 'kernel' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'kernel.class_cache.cache_warmer' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer
     */
    protected function getKernel_ClassCache_CacheWarmerService()
    {
        return $this->services['kernel.class_cache.cache_warmer'] = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\ClassCacheCacheWarmer();
    }

    /**
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    protected function getKnpPaginatorService($lazyLoad = true)
    {
        $this->services['knp_paginator'] = $instance = new \Knp\Component\Pager\Paginator($this->get('debug.event_dispatcher'));

        $instance->setDefaultPaginatorOptions(array('pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true));

        return $instance;
    }

    /**
     * Gets the public 'knp_paginator.helper.processor' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Helper\Processor
     */
    protected function getKnpPaginator_Helper_ProcessorService()
    {
        return $this->services['knp_paginator.helper.processor'] = new \Knp\Bundle\PaginatorBundle\Helper\Processor($this->get('router'), $this->get('translator'));
    }

    /**
     * Gets the public 'knp_paginator.subscriber.filtration' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber
     */
    protected function getKnpPaginator_Subscriber_FiltrationService()
    {
        return $this->services['knp_paginator.subscriber.filtration'] = new \Knp\Component\Pager\Event\Subscriber\Filtration\FiltrationSubscriber();
    }

    /**
     * Gets the public 'knp_paginator.subscriber.paginate' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_PaginateService()
    {
        return $this->services['knp_paginator.subscriber.paginate'] = new \Knp\Component\Pager\Event\Subscriber\Paginate\PaginationSubscriber();
    }

    /**
     * Gets the public 'knp_paginator.subscriber.sliding_pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber
     */
    protected function getKnpPaginator_Subscriber_SlidingPaginationService()
    {
        return $this->services['knp_paginator.subscriber.sliding_pagination'] = new \Knp\Bundle\PaginatorBundle\Subscriber\SlidingPaginationSubscriber(array('defaultPaginationTemplate' => 'KnpPaginatorBundle:Pagination:twitter_bootstrap_v4_pagination.html.twig', 'defaultSortableTemplate' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig', 'defaultFiltrationTemplate' => '@KnpPaginator/Pagination/filtration.html.twig', 'defaultPageRange' => 50));
    }

    /**
     * Gets the public 'knp_paginator.subscriber.sortable' shared service.
     *
     * @return \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber
     */
    protected function getKnpPaginator_Subscriber_SortableService()
    {
        return $this->services['knp_paginator.subscriber.sortable'] = new \Knp\Component\Pager\Event\Subscriber\Sortable\SortableSubscriber();
    }

    /**
     * Gets the public 'knp_paginator.twig.extension.pagination' shared service.
     *
     * @return \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension
     */
    protected function getKnpPaginator_Twig_Extension_PaginationService()
    {
        return $this->services['knp_paginator.twig.extension.pagination'] = new \Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension($this->get('knp_paginator.helper.processor'));
    }

    /**
     * Gets the public 'lexik\bundle\jwtauthenticationbundle\services\jwsprovider\jwsproviderinterface' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\DefaultJWSProvider
     */
    protected function getLexik_Bundle_Jwtauthenticationbundle_Services_Jwsprovider_JwsproviderinterfaceService()
    {
        return $this->services['lexik\\bundle\\jwtauthenticationbundle\\services\\jwsprovider\\jwsproviderinterface'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\DefaultJWSProvider($this->get('lexik_jwt_authentication.key_loader'), 'openssl', 'RS256', 3600);
    }

    /**
     * Gets the public 'lexik\bundle\jwtauthenticationbundle\tokenextractor\tokenextractorinterface' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor
     */
    protected function getLexik_Bundle_Jwtauthenticationbundle_Tokenextractor_TokenextractorinterfaceService()
    {
        return $this->services['lexik\\bundle\\jwtauthenticationbundle\\tokenextractor\\tokenextractorinterface'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor(array(0 => $this->get('lexik_jwt_authentication.extractor.authorization_header_extractor'), 1 => $this->get('lexik_jwt_authentication.extractor.query_parameter_extractor')));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.check_config_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand
     */
    protected function getLexikJwtAuthentication_CheckConfigCommandService()
    {
        return $this->services['lexik_jwt_authentication.check_config_command'] = new \Lexik\Bundle\JWTAuthenticationBundle\Command\CheckConfigCommand();
    }

    /**
     * Gets the public 'lexik_jwt_authentication.encoder.default' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Encoder\DefaultEncoder
     */
    protected function getLexikJwtAuthentication_Encoder_DefaultService()
    {
        return $this->services['lexik_jwt_authentication.encoder.default'] = new \Lexik\Bundle\JWTAuthenticationBundle\Encoder\DefaultEncoder($this->get('lexik\\bundle\\jwtauthenticationbundle\\services\\jwsprovider\\jwsproviderinterface'));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.encoder.lcobucci' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Encoder\DefaultEncoder
     */
    protected function getLexikJwtAuthentication_Encoder_LcobucciService()
    {
        return $this->services['lexik_jwt_authentication.encoder.lcobucci'] = new \Lexik\Bundle\JWTAuthenticationBundle\Encoder\DefaultEncoder(new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider(new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader(($this->targetDirs[2].'/jwt/private.pem'), ($this->targetDirs[2].'/jwt/public.pem'), ''), 'openssl', 'RS256', 3600));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.extractor.authorization_header_extractor' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor
     */
    protected function getLexikJwtAuthentication_Extractor_AuthorizationHeaderExtractorService()
    {
        return $this->services['lexik_jwt_authentication.extractor.authorization_header_extractor'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', 'Authorization');
    }

    /**
     * Gets the public 'lexik_jwt_authentication.extractor.cookie_extractor' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\CookieTokenExtractor
     */
    protected function getLexikJwtAuthentication_Extractor_CookieExtractorService()
    {
        return $this->services['lexik_jwt_authentication.extractor.cookie_extractor'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\CookieTokenExtractor('');
    }

    /**
     * Gets the public 'lexik_jwt_authentication.extractor.query_parameter_extractor' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\QueryParameterTokenExtractor
     */
    protected function getLexikJwtAuthentication_Extractor_QueryParameterExtractorService()
    {
        return $this->services['lexik_jwt_authentication.extractor.query_parameter_extractor'] = new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\QueryParameterTokenExtractor('bearer');
    }

    /**
     * Gets the public 'lexik_jwt_authentication.handler.authentication_failure' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler
     */
    protected function getLexikJwtAuthentication_Handler_AuthenticationFailureService()
    {
        return $this->services['lexik_jwt_authentication.handler.authentication_failure'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler($this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.handler.authentication_success' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler
     */
    protected function getLexikJwtAuthentication_Handler_AuthenticationSuccessService()
    {
        return $this->services['lexik_jwt_authentication.handler.authentication_success'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler($this->get('lexik_jwt_authentication.jwt_manager'), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the public 'lexik_jwt_authentication.jwt_manager' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager
     */
    protected function getLexikJwtAuthentication_JwtManagerService()
    {
        $this->services['lexik_jwt_authentication.jwt_manager'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager($this->get('lexik_jwt_authentication.encoder.lcobucci'), $this->get('debug.event_dispatcher'));

        $instance->setUserIdentityField('username');

        return $instance;
    }

    /**
     * Gets the public 'lexik_jwt_authentication.key_loader' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\OpenSSLKeyLoader
     */
    protected function getLexikJwtAuthentication_KeyLoaderService()
    {
        return $this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\OpenSSLKeyLoader(($this->targetDirs[2].'/jwt/private.pem'), ($this->targetDirs[2].'/jwt/public.pem'), '');
    }

    /**
     * Gets the public 'lexik_jwt_authentication.security.guard.jwt_token_authenticator' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator
     */
    protected function getLexikJwtAuthentication_Security_Guard_JwtTokenAuthenticatorService()
    {
        return $this->services['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator($this->get('lexik_jwt_authentication.jwt_manager'), $this->get('debug.event_dispatcher'), $this->get('lexik\\bundle\\jwtauthenticationbundle\\tokenextractor\\tokenextractorinterface'));
    }

    /**
     * Gets the public 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener($this->get('request_stack'), 'fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        $this->services['monolog.handler.console'] = $instance = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\FingersCrossedHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\FingersCrossedHandler($this->get('monolog.handler.nested'), 400, 0, true, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.nested' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_NestedService()
    {
        $this->services['monolog.handler.nested'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'\\logs/prod.log'), 100, true, NULL);

        $instance->pushProcessor($this->get('monolog.processor.psr_log_message'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.handler.null_internal' shared service.
     *
     * @return \Monolog\Handler\NullHandler
     */
    protected function getMonolog_Handler_NullInternalService()
    {
        return $this->services['monolog.handler.null_internal'] = new \Monolog\Handler\NullHandler();
    }

    /**
     * Gets the public 'monolog.logger.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.security' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.templating' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TemplatingService()
    {
        $this->services['monolog.logger.templating'] = $instance = new \Symfony\Bridge\Monolog\Logger('templating');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'monolog.logger.translation' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_TranslationService()
    {
        $this->services['monolog.logger.translation'] = $instance = new \Symfony\Bridge\Monolog\Logger('translation');

        $instance->pushHandler($this->get('monolog.handler.console'));
        $instance->pushHandler($this->get('monolog.handler.main'));

        return $instance;
    }

    /**
     * Gets the public 'my_admin_bundle.breadcrumb_listener' shared service.
     *
     * @return \PS\GestionBundle\EventListener\MyMenuItemListListener
     */
    protected function getMyAdminBundle_BreadcrumbListenerService()
    {
        return $this->services['my_admin_bundle.breadcrumb_listener'] = new \PS\GestionBundle\EventListener\MyMenuItemListListener($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the public 'my_admin_bundle.menu_listener' shared service.
     *
     * @return \PS\GestionBundle\EventListener\MyMenuItemListListener
     */
    protected function getMyAdminBundle_MenuListenerService()
    {
        return $this->services['my_admin_bundle.menu_listener'] = new \PS\GestionBundle\EventListener\MyMenuItemListListener($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the public 'my_admin_bundle.notification_list_listener' shared service.
     *
     * @return \PS\GestionBundle\EventListener\MyNotificationListListener
     */
    protected function getMyAdminBundle_NotificationListListenerService()
    {
        return $this->services['my_admin_bundle.notification_list_listener'] = new \PS\GestionBundle\EventListener\MyNotificationListListener();
    }

    /**
     * Gets the public 'my_admin_bundle.show_user_listener' shared service.
     *
     * @return \PS\GestionBundle\EventListener\MyShowUserListener
     */
    protected function getMyAdminBundle_ShowUserListenerService()
    {
        return $this->services['my_admin_bundle.show_user_listener'] = new \PS\GestionBundle\EventListener\MyShowUserListener();
    }

    /**
     * Gets the public 'my_admin_bundle.task_list_listener' shared service.
     *
     * @return \PS\GestionBundle\EventListener\MyTaskListListener
     */
    protected function getMyAdminBundle_TaskListListenerService()
    {
        return $this->services['my_admin_bundle.task_list_listener'] = new \PS\GestionBundle\EventListener\MyTaskListListener();
    }

    /**
     * Gets the public 'nelmio_cors.cors_listener' shared service.
     *
     * @return \Nelmio\CorsBundle\EventListener\CorsListener
     */
    protected function getNelmioCors_CorsListenerService()
    {
        return $this->services['nelmio_cors.cors_listener'] = new \Nelmio\CorsBundle\EventListener\CorsListener($this->get('debug.event_dispatcher'), new \Nelmio\CorsBundle\Options\Resolver(array(0 => $this->get('nelmio_cors.options_provider.config'))));
    }

    /**
     * Gets the public 'nelmio_cors.options_provider.config' shared service.
     *
     * @return \Nelmio\CorsBundle\Options\ConfigProvider
     */
    protected function getNelmioCors_OptionsProvider_ConfigService()
    {
        return $this->services['nelmio_cors.options_provider.config'] = new \Nelmio\CorsBundle\Options\ConfigProvider(array('^/api' => array('allow_origin' => true, 'allow_credentials' => true, 'allow_headers' => array(0 => 'origin', 1 => 'x-requested-with', 2 => 'content-type', 3 => 'accept', 4 => 'content-type', 5 => 'authorization'), 'allow_methods' => array(0 => 'POST', 1 => 'PUT', 2 => 'GET', 3 => 'DELETE', 4 => 'PATCH', 5 => 'OPTIONS'), 'max_age' => 3600)), array('allow_origin' => array(), 'allow_credentials' => false, 'allow_headers' => array(), 'expose_headers' => array(), 'allow_methods' => array(), 'max_age' => 0, 'hosts' => array(), 'origin_regex' => false, 'forced_allow_origin_value' => NULL));
    }

    /**
     * Gets the public 'ob_highcharts.twig.highcharts_extension' shared service.
     *
     * @return \Ob\HighchartsBundle\Twig\HighchartsExtension
     */
    protected function getObHighcharts_Twig_HighchartsExtensionService()
    {
        return $this->services['ob_highcharts.twig.highcharts_extension'] = new \Ob\HighchartsBundle\Twig\HighchartsExtension();
    }

    /**
     * Gets the public 'phpoffice.spreadsheet' shared service.
     *
     * @return \Yectep\PhpSpreadsheetBundle\Factory
     */
    protected function getPhpoffice_SpreadsheetService()
    {
        return $this->services['phpoffice.spreadsheet'] = new \Yectep\PhpSpreadsheetBundle\Factory();
    }

    /**
     * Gets the public 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false);
    }

    /**
     * Gets the public 'psm.registration_event' shared service.
     *
     * @return \PS\UtilisateurBundle\EventListener\UserRegistrationListener
     */
    protected function getPsm_RegistrationEventService()
    {
        return $this->services['psm.registration_event'] = new \PS\UtilisateurBundle\EventListener\UserRegistrationListener($this->get('router'), $this->get('fos_user.user_manager'), $this->get('doctrine.orm.default_entity_manager'), $this->get('app.ps_sms'));
    }

    /**
     * Gets the public 'psm_d_post_connect' shared service.
     *
     * @return \PS\GestionBundle\EventListener\MyPdoInitializerListener
     */
    protected function getPsmDPostConnectService()
    {
        return $this->services['psm_d_post_connect'] = new \PS\GestionBundle\EventListener\MyPdoInitializerListener();
    }

    /**
     * Gets the public 'psm_logoutlistener' shared service.
     *
     * @return \PS\UtilisateurBundle\EventListener\LogoutListener
     */
    protected function getPsmLogoutlistenerService()
    {
        return $this->services['psm_logoutlistener'] = new \PS\UtilisateurBundle\EventListener\LogoutListener($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the public 'psm_profile_controller' shared service.
     *
     * @return \PS\UtilisateurBundle\Controller\ProfileController
     */
    protected function getPsmProfileControllerService()
    {
        $this->services['psm_profile_controller'] = $instance = new \PS\UtilisateurBundle\Controller\ProfileController($this->get('debug.event_dispatcher'), $this->get('fos_user.resetting.form.factory'), $this->get('fos_user.user_manager'));

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the public 'redirect.after.login' shared service.
     *
     * @return \PS\UtilisateurBundle\EventListener\AfterLoginRedirect
     */
    protected function getRedirect_After_LoginService()
    {
        return $this->services['redirect.after.login'] = new \PS\UtilisateurBundle\EventListener\AfterLoginRedirect($this->get('router'), $this->get('fos_user.user_manager'), $this->get('app.ps_sms'), $this->get('session'), $this->get('swiftmailer.mailer.default'));
    }

    /**
     * Gets the public 'request' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     * @throws InactiveScopeException when the 'request' service is requested while the 'request' scope is not active
     * @deprecated The "request" service is deprecated since Symfony 2.7 and will be removed in 3.0. Use the "request_stack" service instead.
     */
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }

        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \JMS\I18nRoutingBundle\Router\I18nRouter
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \JMS\I18nRoutingBundle\Router\I18nRouter($this, ($this->targetDirs[2].'/config/routing.yml'), array('cache_dir' => __DIR__, 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appProdDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appProdDebugProjectContainerUrlMatcher', 'strict_requirements' => NULL), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setLocaleResolver(new \JMS\I18nRoutingBundle\Router\DefaultLocaleResolver('hl'));
        $instance->setI18nLoaderId('jms_i18n_routing.loader');
        $instance->setDefaultLocale('fr');
        $instance->setRedirectToHost(true);

        return $instance;
    }

    /**
     * Gets the public 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('request_stack'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    protected function getRouting_LoaderService()
    {
        $a = $this->get('controller_name_converter');
        $b = $this->get('file_locator');
        $c = $this->get('annotation_reader');

        $d = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($c);

        $e = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();

        $f = new \Symfony\Component\Config\Loader\LoaderResolver();
        $f->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
        $f->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
        $f->addLoader($d);
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $d));
        $f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $d));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($b, $e));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $b, $a, new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader(new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($c, $this->get('fos_rest.request.param_fetcher.reader'), $this->get('fos_rest.inflector'), false, array('json' => false, 'xml' => false, 'html' => true), true), $c), 'json'));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($b, $e, false, array('json' => false, 'xml' => false, 'html' => true), 'json'));
        $f->addLoader(new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($b, $e, false, array('json' => false, 'xml' => false, 'html' => true), 'json'));

        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, $f);
    }

    /**
     * Gets the public 'sc_datetimepicker.form.type.datetime' shared service.
     *
     * @return \SC\DatetimepickerBundle\Form\Type\DatetimeType
     */
    protected function getScDatetimepicker_Form_Type_DatetimeService()
    {
        return $this->services['sc_datetimepicker.form.type.datetime'] = new \SC\DatetimepickerBundle\Form\Type\DatetimeType(array('formatter' => 'js'));
    }

    /**
     * Gets the public 'sc_datetimepicker.twig.extension.form' shared service.
     *
     * @return \SC\DatetimepickerBundle\Twig\Extension\FormExtension
     */
    protected function getScDatetimepicker_Twig_Extension_FormService()
    {
        return $this->services['sc_datetimepicker.twig.extension.form'] = new \SC\DatetimepickerBundle\Twig\Extension\FormExtension($this->get('twig.form.renderer'));
    }

    /**
     * Gets the public 'security.authentication.guard_handler' shared service.
     *
     * @return \Symfony\Component\Security\Guard\GuardAuthenticatorHandler
     */
    protected function getSecurity_Authentication_GuardHandlerService()
    {
        $this->services['security.authentication.guard_handler'] = $instance = new \Symfony\Component\Security\Guard\GuardAuthenticatorHandler($this->get('security.token_storage'), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), array(0 => 'login', 1 => 'mobile_login', 2 => 'rest'));

        $instance->setSessionAuthenticationStrategy($this->get('security.authentication.session_strategy.cnrao'));

        return $instance;
    }

    /**
     * Gets the public 'security.authentication.session_strategy.cnrao' shared service.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy
     */
    protected function getSecurity_Authentication_SessionStrategy_CnraoService()
    {
        return $this->services['security.authentication.session_strategy.cnrao'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }

    /**
     * Gets the public 'security.authentication.session_strategy.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy
     */
    protected function getSecurity_Authentication_SessionStrategy_LoginService()
    {
        return $this->services['security.authentication.session_strategy.login'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('none');
    }

    /**
     * Gets the public 'security.authentication_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authentication\AuthenticationUtils
     */
    protected function getSecurity_AuthenticationUtilsService()
    {
        return $this->services['security.authentication_utils'] = new \Symfony\Component\Security\Http\Authentication\AuthenticationUtils($this->get('request_stack'));
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker($this->get('security.token_storage'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }

    /**
     * Gets the public 'security.context' shared service.
     *
     * @return \Symfony\Component\Security\Core\SecurityContext
     *
     * @deprecated The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.
     */
    protected function getSecurity_ContextService()
    {
        @trigger_error('The "security.context" service is deprecated since Symfony 2.6 and will be removed in 3.0.', E_USER_DEPRECATED);

        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.token_storage'), $this->get('security.authorization_checker'));
    }

    /**
     * Gets the public 'security.csrf.token_manager' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\CsrfTokenManager
     */
    protected function getSecurity_Csrf_TokenManagerService()
    {
        return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), $this->get('security.csrf.token_storage'), $this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'security.encoder_factory' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('old' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000)), 'new' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', 'arguments' => array(0 => 13))));
    }

    /**
     * Gets the public 'security.firewall' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.dev' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'), 'security.firewall.map.context.login' => new \Symfony\Component\HttpFoundation\RequestMatcher('/api/login'), 'security.firewall.map.context.mobile_login' => new \Symfony\Component\HttpFoundation\RequestMatcher('/api/v2/login'), 'security.firewall.map.context.rest' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/api'), 'security.firewall.map.context.cnrao' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/auth/admin/cnrao'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('^/'))), $this->get('debug.event_dispatcher'));
    }

    /**
     * Gets the public 'security.firewall.map.context.cnrao' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_CnraoService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('http_kernel');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.token_storage');
        $e = $this->get('security.authentication.manager');

        $f = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array());
        $f->setOptions(array('login_path' => 'app_login_cnrao', 'default_target_path' => 'gestion_homepage', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $f->setProviderKey('cnrao');

        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($b, $a, array(), $c);
        $g->setOptions(array('login_path' => 'app_login_cnrao', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        $h = new \Symfony\Component\Security\Http\Firewall\LogoutListener($d, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, 'app_login_cnrao'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'cnrao_logout'));
        $h->addHandler($this->get('security.logout.handler.csrf_token_clearing'));
        $h->addHandler($this->get('security.logout.handler.session'));
        $h->addHandler($this->get('psm_logoutlistener'));

        return $this->services['security.firewall.map.context.cnrao'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($d, $e, $this->get('security.authentication.session_strategy.cnrao'), $a, 'cnrao', $f, $g, array('check_path' => 'cnrao_login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $c, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL), 3 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($d, '6513278fc02cb5.36527390', $c, $e), 4 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($d, $this->get('security.authentication.trust_resolver'), $a, 'cnrao', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($b, $a, 'app_login_cnrao', false), NULL, NULL, $c, false), $h);
    }

    /**
     * Gets the public 'security.firewall.map.context.dev' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_DevService()
    {
        return $this->services['security.firewall.map.context.dev'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(), NULL, NULL);
    }

    /**
     * Gets the public 'security.firewall.map.context.login' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_LoginService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('security.authentication.manager');
        $c = $this->get('security.http_utils');
        $d = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $b, $this->get('security.authentication.session_strategy.cnrao'), $c, 'login', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler($this->get('lexik_jwt_authentication.handler.authentication_success'), array('always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false), 'login'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler($this->get('lexik_jwt_authentication.handler.authentication_failure'), array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path')), array('check_path' => '/api/login', 'username_parameter' => '_username', 'password_parameter' => '_password', 'require_previous_session' => false, 'use_forward' => false, 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $d, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '6513278fc02cb5.36527390', $d, $b), 3 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $c, 'login', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($this->get('http_kernel'), $c, '/login', false), NULL, NULL, $d, true), NULL);
    }

    /**
     * Gets the public 'security.firewall.map.context.main' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('http_kernel');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.token_storage');
        $e = $this->get('security.authentication.manager');
        $f = $this->get('security.authentication.session_strategy.cnrao');
        $g = $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $h = $this->get('security.authentication.rememberme.services.simplehash.main');

        $i = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array());
        $i->setOptions(array('login_path' => 'fos_user_security_login', 'default_target_path' => 'gestion_homepage', 'always_use_default_target_path' => false, 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $i->setProviderKey('main');

        $j = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($b, $a, array(), $c);
        $j->setOptions(array('login_path' => 'fos_user_security_login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'));

        $k = new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($d, $e, $f, $a, 'main', $i, $j, array('check_path' => 'psm_login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $c, $g, NULL);
        $k->setRememberMeServices($h);

        $l = new \Symfony\Component\Security\Http\Firewall\LogoutListener($d, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, 'fos_user_security_login'), array('csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'psm_logout'));
        $l->addHandler($this->get('security.logout.handler.csrf_token_clearing'));
        $l->addHandler($this->get('security.logout.handler.session'));
        $l->addHandler($this->get('psm_logoutlistener'));
        $l->addHandler($h);

        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $k, 3 => new \Symfony\Component\Security\Http\Firewall\RememberMeListener($d, $h, $e, $c, $g, true, $f), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($d, '6513278fc02cb5.36527390', $c, $e), 5 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($d, $this->get('security.authentication.trust_resolver'), $a, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($b, $a, 'fos_user_security_login', false), NULL, NULL, $c, false), $l);
    }

    /**
     * Gets the public 'security.firewall.map.context.mobile_login' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_MobileLoginService()
    {
        $a = $this->get('security.token_storage');
        $b = $this->get('security.authentication.manager');
        $c = $this->get('security.http_utils');
        $d = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.firewall.map.context.mobile_login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($a, $b, $this->get('security.authentication.session_strategy.cnrao'), $c, 'mobile_login', new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler($this->get('lexik_jwt_authentication.handler.authentication_success'), array('always_use_default_target_path' => false, 'default_target_path' => '/', 'login_path' => '/login', 'target_path_parameter' => '_target_path', 'use_referer' => false), 'mobile_login'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler($this->get('lexik_jwt_authentication.handler.authentication_failure'), array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path')), array('check_path' => '/api/v2/login', 'username_parameter' => '_username', 'password_parameter' => '_password', 'require_previous_session' => false, 'use_forward' => false, 'csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'authenticate', 'post_only' => true), $d, $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($a, '6513278fc02cb5.36527390', $d, $b), 3 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, $this->get('security.authentication.trust_resolver'), $c, 'mobile_login', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($this->get('http_kernel'), $c, '/login', false), NULL, NULL, $d, true), NULL);
    }

    /**
     * Gets the public 'security.firewall.map.context.rest' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    protected function getSecurity_Firewall_Map_Context_RestService()
    {
        $a = $this->get('security.authentication.manager');
        $b = $this->get('lexik_jwt_authentication.security.guard.jwt_token_authenticator');
        $c = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('security.token_storage');

        return $this->services['security.firewall.map.context.rest'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => new \Symfony\Component\Security\Guard\Firewall\GuardAuthenticationListener($this->get('security.authentication.guard_handler'), $a, 'rest', array(0 => $b), $c), 2 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($d, '6513278fc02cb5.36527390', $c, $a), 3 => $this->get('security.access_listener')), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($d, $this->get('security.authentication.trust_resolver'), $this->get('security.http_utils'), 'rest', $b, NULL, NULL, $c, true), NULL);
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder($this->get('security.encoder_factory'));
    }

    /**
     * Gets the public 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the public 'security.secure_random' shared service.
     *
     * @return \Symfony\Component\Security\Core\Util\SecureRandom
     *
     * @deprecated The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.
     */
    protected function getSecurity_SecureRandomService()
    {
        @trigger_error('The "security.secure_random" service is deprecated since Symfony 2.8 and will be removed in 3.0. Use the random_bytes() function instead.', E_USER_DEPRECATED);

        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom();
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'security.user_checker.login' shared service.
     *
     * @return \Symfony\Component\Security\Core\User\UserChecker
     */
    protected function getSecurity_UserChecker_LoginService()
    {
        return $this->services['security.user_checker.login'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }

    /**
     * Gets the public 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.token_storage'), $this->get('security.encoder_factory'));
    }

    /**
     * Gets the public 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the public 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.datetime' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.doctrine.orm' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter
     */
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'), true);
    }

    /**
     * Gets the public 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the public 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(NULL, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), $this->get('security.authentication.trust_resolver', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.role_hierarchy', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'sensio_framework_extra.view.guesser' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser
     */
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }

    /**
     * Gets the public 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }

    /**
     * Gets the public 'service_container' shared service.
     *
     * @throws RuntimeException always since this service is expected to be injected dynamically
     */
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }

    /**
     * Gets the public 'session' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Session
     */
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }

    /**
     * Gets the public 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the public 'session.storage.filesystem' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage
     */
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage((__DIR__.'/sessions'), 'MOCKSESSID', $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session.storage.native' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage
     */
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array('cookie_httponly' => true, 'gc_probability' => 1), NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session.storage.php_bridge' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage
     */
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage(NULL, $this->get('session.storage.metadata_bag'));
    }

    /**
     * Gets the public 'session_listener' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }

    /**
     * Gets the public 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the public 'swiftmailer.email_sender.listener' shared service.
     *
     * @return \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener
     */
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default' shared service.
     *
     * @return \Swift_Mailer
     */
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.plugin.messagelogger' shared service.
     *
     * @return \Swift_Plugins_MessageLogger
     */
    protected function getSwiftmailer_Mailer_Default_Plugin_MessageloggerService()
    {
        return $this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \Swift_Plugins_MessageLogger();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.spool' shared service.
     *
     * @return \Swift_MemorySpool
     */
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport' shared service.
     *
     * @return \Swift_Transport_SpoolTransport
     */
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        $this->services['swiftmailer.mailer.default.transport'] = $instance = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));

        $instance->registerPlugin($this->get('swiftmailer.mailer.default.plugin.messagelogger'));

        return $instance;
    }

    /**
     * Gets the public 'swiftmailer.mailer.default.transport.real' shared service.
     *
     * @return \Swift_Transport_EsmtpTransport
     */
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $a = new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()));
        $a->setUsername(NULL);
        $a->setPassword(NULL);
        $a->setAuthMode(NULL);

        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => $a), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));

        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        call_user_func(array(new \Symfony\Bundle\SwiftmailerBundle\DependencyInjection\SmtpTransportConfigurator(NULL, $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE)), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the public 'templating' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\TwigEngine
     */
    protected function getTemplatingService()
    {
        return $this->services['templating'] = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
    }

    /**
     * Gets the public 'templating.filename_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser
     */
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }

    /**
     * Gets the public 'templating.helper.assets' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper
     */
    protected function getTemplating_Helper_AssetsService()
    {
        return $this->services['templating.helper.assets'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\AssetsHelper($this->get('assets.packages'), array());
    }

    /**
     * Gets the public 'templating.helper.logout_url' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper
     */
    protected function getTemplating_Helper_LogoutUrlService()
    {
        return $this->services['templating.helper.logout_url'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this->get('security.logout_url_generator'));
    }

    /**
     * Gets the public 'templating.helper.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper
     */
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }

    /**
     * Gets the public 'templating.helper.security' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper
     */
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the public 'templating.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader
     */
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }

    /**
     * Gets the public 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }

    /**
     * Gets the public 'translation.dumper.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\CsvFileDumper
     */
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IniFileDumper
     */
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.json' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\JsonFileDumper
     */
    protected function getTranslation_Dumper_JsonService()
    {
        return $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\MoFileDumper
     */
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.php' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PhpFileDumper
     */
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.po' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\PoFileDumper
     */
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\QtFileDumper
     */
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.res' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\IcuResFileDumper
     */
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.xliff' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\XliffFileDumper
     */
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }

    /**
     * Gets the public 'translation.dumper.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Dumper\YamlFileDumper
     */
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }

    /**
     * Gets the public 'translation.extractor' shared service.
     *
     * @return \Symfony\Component\Translation\Extractor\ChainExtractor
     */
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();

        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));

        return $instance;
    }

    /**
     * Gets the public 'translation.extractor.php' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor
     */
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }

    /**
     * Gets the public 'translation.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader
     */
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');

        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();

        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        $instance->addLoader('json', $this->get('translation.loader.json'));

        return $instance;
    }

    /**
     * Gets the public 'translation.loader.csv' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\CsvFileLoader
     */
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }

    /**
     * Gets the public 'translation.loader.dat' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuDatFileLoader
     */
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader();
    }

    /**
     * Gets the public 'translation.loader.ini' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IniFileLoader
     */
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }

    /**
     * Gets the public 'translation.loader.json' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\JsonFileLoader
     */
    protected function getTranslation_Loader_JsonService()
    {
        return $this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
    }

    /**
     * Gets the public 'translation.loader.mo' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\MoFileLoader
     */
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.php' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PhpFileLoader
     */
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }

    /**
     * Gets the public 'translation.loader.po' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\PoFileLoader
     */
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }

    /**
     * Gets the public 'translation.loader.qt' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\QtFileLoader
     */
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }

    /**
     * Gets the public 'translation.loader.res' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\IcuResFileLoader
     */
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }

    /**
     * Gets the public 'translation.loader.xliff' shared service.
     *
     * @return \JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader
     */
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \JMS\TranslationBundle\Translation\Loader\Symfony\XliffLoader();
    }

    /**
     * Gets the public 'translation.loader.yml' shared service.
     *
     * @return \Symfony\Component\Translation\Loader\YamlFileLoader
     */
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }

    /**
     * Gets the public 'translation.writer' shared service.
     *
     * @return \Symfony\Component\Translation\Writer\TranslationWriter
     */
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('json', $this->get('translation.dumper.json'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));

        return $instance;
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\LoggingTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\LoggingTranslator($this->get('translator.default'), $this->get('monolog.logger.translation'));
    }

    /**
     * Gets the public 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini'), 'translation.loader.json' => array(0 => 'json')), array('cache_dir' => (__DIR__.'/translations'), 'debug' => true, 'resource_files' => array('af' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.af.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.af.yml')), 'ar' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ar.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ar.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ar.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ar.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ar.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.ar.xliff')), 'az' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.az.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.az.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.az.xlf')), 'bg' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.bg.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.bg.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.bg.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bg.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bg.yml')), 'ca' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ca.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ca.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ca.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ca.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ca.yml')), 'cs' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cs.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.cs.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.cs.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.cs.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.cs.yml'), 5 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.cs.xliff')), 'cy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.cy.xlf')), 'da' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.da.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.da.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.da.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.da.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.da.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.da.xliff')), 'de' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.de.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.de.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.de.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.de.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.de.yml'), 5 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.de.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.de.xliff')), 'el' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.el.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.el.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.el.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.el.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.el.yml')), 'en' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.en.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.en.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.en.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.en.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.en.yml'), 5 => ($this->targetDirs[2].'/Resources/AvanzuAdminThemeBundle/translations\\messages.en.yml'), 6 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.en.xliff'), 7 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.en.xliff'), 8 => ($this->targetDirs[2].'/Resources/translations\\messages.en.yml'), 9 => ($this->targetDirs[2].'/Resources/translations\\validators.en.yml')), 'es' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.es.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.es.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.es.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.es.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.es.yml'), 5 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.es.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.es.xliff'), 7 => ($this->targetDirs[2].'/Resources/translations\\admin.es.yml'), 8 => ($this->targetDirs[2].'/Resources/translations\\consultation.es.yml'), 9 => ($this->targetDirs[2].'/Resources/translations\\menu.es.yml'), 10 => ($this->targetDirs[2].'/Resources/translations\\messages.es.yml'), 11 => ($this->targetDirs[2].'/Resources/translations\\validators.es.yml')), 'et' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.et.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.et.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.et.yml')), 'eu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.eu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.eu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.eu.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.eu.yml')), 'fa' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fa.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fa.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fa.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fa.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fa.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.fa.xliff')), 'fi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fi.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fi.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fi.yml')), 'fr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.fr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.fr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.fr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.fr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.fr.yml'), 5 => ($this->targetDirs[2].'/Resources/AvanzuAdminThemeBundle/translations\\messages.fr.yml'), 6 => ($this->targetDirs[3].'\\src\\PS\\SiteBundle/Resources/translations\\messages.fr.xlf'), 7 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.fr.xliff'), 8 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.fr.xliff'), 9 => ($this->targetDirs[2].'/Resources/translations\\admin.fr.yml'), 10 => ($this->targetDirs[2].'/Resources/translations\\consultation.fr.yml'), 11 => ($this->targetDirs[2].'/Resources/translations\\FOSUserBundle.fr.yml'), 12 => ($this->targetDirs[2].'/Resources/translations\\menu.fr.yml'), 13 => ($this->targetDirs[2].'/Resources/translations\\messages.fr.yml'), 14 => ($this->targetDirs[2].'/Resources/translations\\validators.fr.yml')), 'gl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.gl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.gl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.gl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.gl.yml')), 'he' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.he.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.he.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.he.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.he.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.he.yml')), 'hr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hr.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.hr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.hr.yml')), 'hu' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hu.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hu.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.hu.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.hu.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.hu.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.hu.xliff')), 'hy' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.hy.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.hy.xlf')), 'id' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.id.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.id.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.id.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.id.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.id.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.id.xliff')), 'it' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.it.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.it.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.it.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.it.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.it.yml'), 5 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.it.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.it.xliff')), 'ja' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ja.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ja.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ja.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ja.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ja.yml'), 5 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.ja.xliff')), 'lb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lb.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lb.yml')), 'lt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lt.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lt.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.lt.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.lt.xliff')), 'lv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.lv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.lv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.lv.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.lv.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.lv.yml')), 'mn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.mn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.mn.xlf')), 'nb' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nb.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nb.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nb.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.nb.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.nb.yml')), 'nl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.nl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.nl.yml'), 5 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.nl.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.nl.xliff')), 'nn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.nn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.nn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.nn.xlf')), 'no' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.no.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.no.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.no.xlf')), 'pl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pl.yml'), 5 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.pl.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.pl.xliff')), 'pt' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pt.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pt.yml')), 'pt_BR' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.pt_BR.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.pt_BR.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_BR.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.pt_BR.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.pt_BR.yml'), 5 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.pt_BR.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.pt_BR.xliff')), 'ro' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ro.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ro.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ro.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ro.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ro.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.ro.xliff')), 'ru' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.ru.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.ru.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ru.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ru.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ru.yml'), 5 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.ru.xliff'), 6 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.ru.xliff')), 'sk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sk.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sk.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sk.yml'), 5 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.sk.xliff')), 'sl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sl.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sl.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sl.yml')), 'sq' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sq.xlf')), 'sr_Cyrl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Cyrl.xlf')), 'sr_Latn' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sr_Latn.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sr_Latn.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sr_Latn.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sr_Latn.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sr_Latn.yml')), 'sv' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.sv.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.sv.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.sv.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.sv.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.sv.yml'), 5 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.sv.xliff')), 'th' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.th.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.th.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.th.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.th.yml')), 'tl' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tl.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.tl.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tl.xlf')), 'tr' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.tr.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.tr.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.tr.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.tr.yml'), 4 => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/translations\\messages.tr.xliff')), 'uk' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.uk.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.uk.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.uk.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.uk.yml'), 4 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.uk.xliff')), 'vi' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.vi.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.vi.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.vi.yml'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.vi.yml')), 'zh_CN' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_CN.xlf'), 1 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/translations\\validators.zh_CN.xlf'), 2 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.zh_CN.xlf'), 3 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.zh_CN.yml'), 4 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.zh_CN.yml')), 'zh_TW' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator/Resources/translations\\validators.zh_TW.xlf')), 'pt_PT' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.pt_PT.xlf')), 'ua' => array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core/Resources/translations\\security.ua.xlf')), 'bn' => array(0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bn.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bn.yml')), 'bn_BD' => array(0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.bn_BD.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.bn_BD.yml')), 'eo' => array(0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.eo.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.eo.yml')), 'ky' => array(0 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\FOSUserBundle.ky.yml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/translations\\validators.ky.yml'), 2 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.ky.xliff')), 'sw' => array(0 => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/translations\\KnpPaginatorBundle.sw.xliff')))), array());

        $instance->setConfigCacheFactory($this->get('config_cache_factory'));
        $instance->setFallbackLocales(array(0 => 'fr'));

        return $instance;
    }

    /**
     * Gets the public 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener($this->get('translator'), $this->get('request_stack'));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $a = $this->get('debug.stopwatch', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('request_stack');
        $c = $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $d = $this->get('fragment.handler');
        $e = $this->get('router');

        $f = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($b, $c);

        $g = new \APY\DataGridBundle\Twig\DataGridExtension($e, 'APYDataGridBundle::blocks.html.twig');
        $g->setPagerFanta(array('enable' => false, 'view_class' => 'Pagerfanta\\View\\DefaultView', 'options' => array('prev_message' => '«', 'next_message' => '»')));

        $h = new \Symfony\Bridge\Twig\AppVariable();
        $h->setEnvironment('prod');
        $h->setDebug(true);
        if ($this->has('security.token_storage')) {
            $h->setTokenStorage($this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->has('request_stack')) {
            $h->setRequestStack($b);
        }
        $h->setContainer($this);

        $this->services['twig'] = $instance = new \Twig\Environment($this->get('twig.loader'), array('form_themes' => array(0 => 'form_div_layout.html.twig', 1 => 'AvanzuAdminThemeBundle:layout:form-theme.html.twig'), 'debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape' => 'name', 'cache' => (__DIR__.'/twig'), 'charset' => 'UTF-8', 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $instance->addExtension($this->get('app.custom_twig_extension'));
        $instance->addExtension($this->get('visitor_counters_twig_extension'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension($this->get('security.logout_url_generator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($this->get('security.authorization_checker', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension($this->get('twig.profile'), $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension($this->get('assets.packages'), $f));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, $this->targetDirs[2], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($e));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($d));
        $instance->addExtension($f);
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension($this->get('twig.form.renderer')));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension($this->get('avanzu_admin_theme.widget_extension.class'));
        $instance->addExtension($g);
        $instance->addExtension($this->get('knp_paginator.twig.extension.pagination'));
        $instance->addExtension($this->get('ob_highcharts.twig.highcharts_extension'));
        $instance->addExtension(new \JMS\Serializer\Twig\SerializerExtension($this->get('jms_serializer')));
        $instance->addExtension($this->get('sc_datetimepicker.twig.extension.form'));
        $instance->addExtension($this->get('jms_translation.twig_extension'));
        $instance->addGlobal('app', $h);
        $instance->addGlobal('admin_theme', $this->get('avanzu_admin_theme.theme_manager'));
        call_user_func(array(new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','), 'configure'), $instance);

        return $instance;
    }

    /**
     * Gets the public 'twig.controller.exception' shared service.
     *
     * @return \Avanzu\AdminThemeBundle\Controller\ExceptionController
     */
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Avanzu\AdminThemeBundle\Controller\ExceptionController($this->get('twig'), true);
    }

    /**
     * Gets the public 'twig.controller.preview_error' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController
     */
    protected function getTwig_Controller_PreviewErrorService()
    {
        return $this->services['twig.controller.preview_error'] = new \Symfony\Bundle\TwigBundle\Controller\PreviewErrorController($this->get('http_kernel'), 'twig.controller.exception:showAction');
    }

    /**
     * Gets the public 'twig.exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ExceptionListener
     */
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE), true);
    }

    /**
     * Gets the public 'twig.loader' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));

        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[2].'/Resources/TwigBundle/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'\\src\\PS\\UtilisateurBundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), 'FOSUser');
        $instance->addPath(($this->targetDirs[2].'/Resources/AvanzuAdminThemeBundle/views'), 'AvanzuAdminTheme');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\avanzu\\admin-theme-bundle/Resources/views'), 'AvanzuAdminTheme');
        $instance->addPath(($this->targetDirs[3].'\\src\\PS\\ParametreBundle/Resources/views'), 'Parametre');
        $instance->addPath(($this->targetDirs[3].'\\src\\PS\\SiteBundle/Resources/views'), 'Site');
        $instance->addPath(($this->targetDirs[3].'\\src\\PS\\UtilisateurBundle/Resources/views'), 'Utilisateur');
        $instance->addPath(($this->targetDirs[3].'\\src\\PS\\GestionBundle/Resources/views'), 'Gestion');
        $instance->addPath(($this->targetDirs[2].'/Resources/APYDataGridBundle/views'), 'APYDataGrid');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle/Resources/views'), 'APYDataGrid');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle/Resources/views'), 'KnpPaginator');
        $instance->addPath(($this->targetDirs[3].'\\src\\PS\\ApiBundle/Resources/views'), 'PSApi');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\stephanecollot\\datetimepicker-bundle\\SC\\DatetimepickerBundle/Resources/views'), 'SCDatetimepicker');
        $instance->addPath(($this->targetDirs[3].'\\vendor\\jms\\translation-bundle\\JMS\\TranslationBundle/Resources/views'), 'JMSTranslation');
        $instance->addPath(($this->targetDirs[3].'\\src\\PS\\SpecialiteBundle/Resources/views'), 'PSSpecialite');
        $instance->addPath(($this->targetDirs[3].'\\src\\PS\\MobileBundle/Resources/views'), 'Mobile');
        $instance->addPath(($this->targetDirs[2].'/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the public 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the public 'twig.translation.extractor' shared service.
     *
     * @return \Symfony\Bridge\Twig\Translation\TwigExtractor
     */
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }

    /**
     * Gets the public 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the public 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = $this->get('validator.builder')->getValidator();
    }

    /**
     * Gets the public 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('PS\\MobileBundle\\Validator\\Constraints\\UniqueValueEntityValidator' => 'app.validator.unique_value_in_entity', 'PS\\GestionBundle\\Validator\\Constraints\\PassConstraintValidator' => 'app.contains_pass_validator', 'PS\\GestionBundle\\Validator\\Constraints\\PassValidator' => 'app.contains_pass_client', 'date_constraint_validator' => 'app.rdv_date_constraint', 'PS\\GestionBundle\\Validator\\Constraints\\DateTimeAvailabilityConstraintValidator' => 'app.rdv_date_constraint', 'assurance_constraint_validator' => 'app.assurance_constraint', 'PS\\GestionBundle\\Validator\\Constraints\\AssuranceConstraintValidator' => 'app.assurance_constraint', 'validator.expression' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => 'validator.expression', 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => 'validator.email', 'security.validator.user_password' => 'security.validator.user_password', 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => 'doctrine.orm.validator.unique')));
        $instance->setTranslator($this->get('translator'));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form/Resources/config/validation.xml'), 1 => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping($this->get('annotation_reader'));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.util.canonical_fields_updater'))));
        $instance->addXmlMapping(($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle\\DependencyInjection\\Compiler/../../Resources/config/storage-validation/orm.xml'));

        return $instance;
    }

    /**
     * Gets the public 'validator.email' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\EmailValidator
     */
    protected function getValidator_EmailService()
    {
        return $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false);
    }

    /**
     * Gets the public 'validator.expression' shared service.
     *
     * @return \Symfony\Component\Validator\Constraints\ExpressionValidator
     */
    protected function getValidator_ExpressionService()
    {
        return $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator($this->get('property_accessor'));
    }

    /**
     * Gets the public 'visitor_counters_twig_extension' shared service.
     *
     * @return \PS\GestionBundle\Twig\VisitorCounterExtension
     */
    protected function getVisitorCountersTwigExtensionService()
    {
        return $this->services['visitor_counters_twig_extension'] = new \PS\GestionBundle\Twig\VisitorCounterExtension($this->targetDirs[2]);
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }

    /**
     * Gets the private 'form.server_params' shared service.
     *
     * @return \Symfony\Component\Form\Util\ServerParams
     */
    protected function getForm_ServerParamsService()
    {
        return $this->services['form.server_params'] = new \Symfony\Component\Form\Util\ServerParams($this->get('request_stack'));
    }

    /**
     * Gets the private 'fos_rest.exception.codes_map' shared service.
     *
     * @return \FOS\RestBundle\Util\ExceptionValueMap
     */
    protected function getFosRest_Exception_CodesMapService()
    {
        return $this->services['fos_rest.exception.codes_map'] = new \FOS\RestBundle\Util\ExceptionValueMap(array('Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException' => 404));
    }

    /**
     * Gets the private 'fos_rest.request.param_fetcher.reader' shared service.
     *
     * @return \FOS\RestBundle\Request\ParamReader
     */
    protected function getFosRest_Request_ParamFetcher_ReaderService()
    {
        return $this->services['fos_rest.request.param_fetcher.reader'] = new \FOS\RestBundle\Request\ParamReader($this->get('annotation_reader'));
    }

    /**
     * Gets the private 'fos_rest.serializer.jms_handler_registry.inner' shared service.
     *
     * @return \JMS\Serializer\Handler\LazyHandlerRegistry
     */
    protected function getFosRest_Serializer_JmsHandlerRegistry_InnerService()
    {
        return $this->services['fos_rest.serializer.jms_handler_registry.inner'] = new \JMS\Serializer\Handler\LazyHandlerRegistry($this, array(1 => array('Exception' => array('json' => array(0 => 'fos_rest.serializer.exception_normalizer.jms', 1 => 'serializeToJson'), 'xml' => array(0 => 'fos_rest.serializer.exception_normalizer.jms', 1 => 'serializeToXml')), 'DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTime')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateTimeImmutable')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'serializeDateInterval')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'serializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'serializeMap')), 'Symfony\\Component\\Validator\\ConstraintViolationList' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeListToyml')), 'Symfony\\Component\\Validator\\ConstraintViolation' => array('xml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToxml'), 'json' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationTojson'), 'yml' => array(0 => 'jms_serializer.constraint_violation_handler', 1 => 'serializeViolationToyml')), 'Symfony\\Component\\Form\\Form' => array('xml' => array(0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormToxml'), 'json' => array(0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormTojson'), 'yml' => array(0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormToyml')), 'Symfony\\Component\\Form\\FormError' => array('xml' => array(0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorToxml'), 'json' => array(0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorTojson'), 'yml' => array(0 => 'fos_rest.serializer.form_error_handler', 1 => 'serializeFormErrorToyml'))), 2 => array('DateTime' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeFromyml')), 'DateTimeImmutable' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateTimeImmutableFromyml')), 'DateInterval' => array('json' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromjson'), 'xml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromxml'), 'yml' => array(0 => 'jms_serializer.datetime_handler', 1 => 'deserializeDateIntervalFromyml')), 'ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\Common\\Collections\\ArrayCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ORM\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => array('json' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'xml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection'), 'yml' => array(0 => 'jms_serializer.array_collection_handler', 1 => 'deserializeCollection')), 'PhpCollection\\Sequence' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeSequence')), 'PhpCollection\\Map' => array('json' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'xml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap'), 'yml' => array(0 => 'jms_serializer.php_collection_handler', 1 => 'deserializeMap')))));
    }

    /**
     * Gets the private 'fos_user.object_manager' shared service.
     *
     * @return \Doctrine\Common\Persistence\ObjectManager
     */
    protected function getFosUser_ObjectManagerService()
    {
        return $this->services['fos_user.object_manager'] = $this->get('doctrine')->getManager(NULL);
    }

    /**
     * Gets the private 'fos_user.user_provider.username' shared service.
     *
     * @return \FOS\UserBundle\Security\UserProvider
     */
    protected function getFosUser_UserProvider_UsernameService()
    {
        return $this->services['fos_user.user_provider.username'] = new \FOS\UserBundle\Security\UserProvider($this->get('fos_user.user_manager'));
    }

    /**
     * Gets the private 'fos_user.util.canonical_fields_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\CanonicalFieldsUpdater
     */
    protected function getFosUser_Util_CanonicalFieldsUpdaterService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');

        return $this->services['fos_user.util.canonical_fields_updater'] = new \FOS\UserBundle\Util\CanonicalFieldsUpdater($a, $a);
    }

    /**
     * Gets the private 'fos_user.util.password_updater' shared service.
     *
     * @return \FOS\UserBundle\Util\PasswordUpdater
     */
    protected function getFosUser_Util_PasswordUpdaterService()
    {
        return $this->services['fos_user.util.password_updater'] = new \FOS\UserBundle\Util\PasswordUpdater($this->get('security.encoder_factory'));
    }

    /**
     * Gets the private 'jms_i18n_routing.route_exclusion_strategy' shared service.
     *
     * @return \JMS\I18nRoutingBundle\Router\DefaultRouteExclusionStrategy
     */
    protected function getJmsI18nRouting_RouteExclusionStrategyService()
    {
        return $this->services['jms_i18n_routing.route_exclusion_strategy'] = new \JMS\I18nRoutingBundle\Router\DefaultRouteExclusionStrategy();
    }

    /**
     * Gets the private 'jms_serializer.unserialize_object_constructor' shared service.
     *
     * @return \JMS\Serializer\Construction\UnserializeObjectConstructor
     */
    protected function getJmsSerializer_UnserializeObjectConstructorService()
    {
        return $this->services['jms_serializer.unserialize_object_constructor'] = new \JMS\Serializer\Construction\UnserializeObjectConstructor();
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = $this->get('security.authentication.trust_resolver');
        $b = $this->get('security.role_hierarchy');

        $this->services['security.access.decision_manager'] = $instance = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(), 'affirmative', false, true);

        $instance->setVoters(array(0 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($a), 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($b), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter(new \Symfony\Component\Security\Core\Authorization\ExpressionLanguage(), $a, $b), 3 => new \PS\UtilisateurBundle\Security\PatientVoter(), 4 => new \PS\UtilisateurBundle\Security\CorporateVoter(), 5 => new \PS\UtilisateurBundle\Security\HopitalVoter(), 6 => new \PS\UtilisateurBundle\Security\UserVoter(), 7 => new \PS\UtilisateurBundle\Security\AssocieVoter(), 8 => new \PS\UtilisateurBundle\Security\ConsultationVoter()));

        return $instance;
    }

    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.token_storage'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }

    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/_wdt/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/_profiler/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/js/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/css/'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), 'https');
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login_check$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/register$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/profil$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/patients/([0-9]+)$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/v2/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/v2/register$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/v2/profil$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/v2/reset-password'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/v2/update-password'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/v2/patients/([0-9]+)'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/parametre/specialite/medecins'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/config/medecin/([0-9]+)/specialites'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/config/utilisateur/([0-9]+)/code'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/config/utilisateur'), array(0 => 'ROLE_INFIRMIER', 1 => 'ROLE_RECEPTION', 2 => 'ROLE_ADMIN', 3 => 'ROLE_ADMIN_SUP', 4 => 'ROLE_ADMIN_CORPORATE', 5 => 'ROLE_ADMIN_LOCAL'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/config/utilisateur/unregister'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/reset-password$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/consultation/historique$'), array(0 => 'ROLE_CUSTOMER', 1 => 'ROLE_MEDECIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/config/'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ADMIN_CORPORATE', 2 => 'ROLE_ADMIN_LOCAL', 3 => 'ROLE_ADMIN_SUP'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/specialite'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ADMIN_CORPORATE', 2 => 'ROLE_MEDECIN', 3 => 'ROLE_ASSISTANT'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/rendezvous/'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/rendezvous/add'), array(0 => 'ROLE_MEDECIN', 1 => 'ROLE_INFIRMIER', 2 => 'ROLE_ASSISTANT', 3 => 'ROLE_CUSTOMER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/rendezvous/edit/([0-9]+)$'), array(0 => 'ROLE_MEDECIN', 1 => 'ROLE_INFIRMIER', 2 => 'ROLE_ASSISTANT', 3 => 'ROLE_CUSTOMER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/rendezvous/annuler/([0-9]+)$'), array(0 => 'ROLE_MEDECIN', 1 => 'ROLE_INFIRMIER', 2 => 'ROLE_ASSISTANT', 3 => 'ROLE_CUSTOMER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/corporate'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ADMIN_CORPORATE', 2 => 'ROLE_ADMIN_LOCAL', 3 => 'ROLE_ADMIN_SUP'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/faq/?$'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/patient'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/vaccination'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/questionnaire'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/questionnaire-depistage/([0-9]+)/(stat|map)$'), array(0 => 'ROLE_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/urgence'), array(0 => 'ROLE_URGENTISTE', 1 => 'ROLE_CUSTOMER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/historique-urgence$'), array(0 => 'ROLE_URGENTISTE', 1 => 'ROLE_CUSTOMER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/historique-urgence/([0-9]+)/liste'), array(0 => 'ROLE_URGENTISTE', 1 => 'ROLE_CUSTOMER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/historique-urgence'), array(0 => 'ROLE_URGENTISTE'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/abonnement'), array(0 => 'ROLE_CUSTOMER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/admission'), array(0 => 'ROLE_RECEPTION', 1 => 'ROLE_INFIRMIER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/fiche/(new|edit|search)'), array(0 => 'ROLE_MEDECIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/fiche/?(([0-9]+)/show)?'), array(0 => 'ROLE_MEDECIN', 1 => 'ROLE_CUSTOMER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/gestion/'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ADMIN_CORPORATE', 2 => 'ROLE_ADMIN_LOCAL', 3 => 'ROLE_ADMIN_SUP'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/parametre/hopital'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ADMIN_CORPORATE', 2 => 'ROLE_ADMIN_LOCAL', 3 => 'ROLE_ADMIN_SUP'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/pharmacie/historique'), array(0 => 'ROLE_CUSTOMER', 1 => 'ROLE_PHARMACIE', 2 => 'ROLE_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/pharmacie/ordonnances'), array(0 => 'ROLE_CUSTOMER', 1 => 'ROLE_PHARMACIE'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/pharmacie/ordonnances/([0-9]+)$'), array(0 => 'ROLE_PHARMACIE'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/pharmacie/medicaments'), array(0 => 'ROLE_CUSTOMER', 1 => 'ROLE_PHARMACIE'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/pharmacie/verif'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/pharmacie/garde'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/pharmacie/'), array(0 => 'ROLE_PHARMACIE', 1 => 'ROLE_ADMIN', 2 => 'ROLE_ADMIN_SUP'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/infirmier/'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_INFIRMIER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/change-password'), array(0 => 'ROLE_CUSTOMER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/reseting$'), array(0 => 'ROLE_CUSTOMER'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/patient/'), array(0 => 'ROLE_MEDECIN', 1 => 'ROLE_CUSTOMER', 2 => 'ROLE_RECEPTION', 3 => 'ROLE_ADMIN_LOCAL', 4 => 'ROLE_ADMIN_CORPORATE', 5 => 'ROLE_PHARMACIE', 6 => 'ROLE_ADMIN_SUP', 7 => 'ROLE_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/((fr|es|en)/)?admin/'), array(0 => 'IS_AUTHENTICATED_FULLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/'), array(0 => 'ROLE_CUSTOMER', 1 => 'ROLE_MEDECIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), 'https');

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('fos_user.user_provider.username');
        $b = $this->get('security.user_checker.login');
        $c = $this->get('security.encoder_factory');

        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'login', $c, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('6513278fc02cb5.36527390'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'mobile_login', $c, true), 3 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('6513278fc02cb5.36527390'), 4 => new \Symfony\Component\Security\Guard\Provider\GuardAuthenticationProvider(array(0 => $this->get('lexik_jwt_authentication.security.guard.jwt_token_authenticator')), $a, 'rest', $b), 5 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('6513278fc02cb5.36527390'), 6 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'cnrao', $c, true), 7 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('6513278fc02cb5.36527390'), 8 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $c, true), 9 => new \Symfony\Component\Security\Core\Authentication\Provider\RememberMeAuthenticationProvider($b, 'ThisTokenIsNotSoSecretChangeIt', 'main'), 10 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('6513278fc02cb5.36527390')), false);

        $instance->setEventDispatcher($this->get('debug.event_dispatcher'));

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.rememberme.services.simplehash.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices
     */
    protected function getSecurity_Authentication_Rememberme_Services_Simplehash_MainService()
    {
        return $this->services['security.authentication.rememberme.services.simplehash.main'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => $this->get('fos_user.user_provider.username')), 'ThisTokenIsNotSoSecretChangeIt', 'main', array('lifetime' => 604800, 'path' => 'gestion_homepage', 'secure' => true, 'name' => 'REMEMBERME', 'domain' => NULL, 'httponly' => true, 'always_remember_me' => false, 'remember_me_parameter' => '_remember_me'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.channel_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ChannelListener
     */
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the private 'security.context_listener.0' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ContextListener
     */
    protected function getSecurity_ContextListener_0Service()
    {
        $a = $this->get('fos_user.user_provider.username');

        return $this->services['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener($this->get('security.token_storage'), array(0 => $a, 1 => $a, 2 => new \Lexik\Bundle\JWTAuthenticationBundle\Security\User\JWTUserProvider('Lexik\\Bundle\\JWTAuthenticationBundle\\Security\\User\\JWTUser')), 'main', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('debug.event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * Gets the private 'security.csrf.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage
     */
    protected function getSecurity_Csrf_TokenStorageService()
    {
        return $this->services['security.csrf.token_storage'] = new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage($this->get('session'));
    }

    /**
     * Gets the private 'security.http_utils' shared service.
     *
     * @return \Symfony\Component\Security\Http\HttpUtils
     */
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);

        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a, '{^https?://%s$}i');
    }

    /**
     * Gets the private 'security.logout.handler.csrf_token_clearing' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler
     */
    protected function getSecurity_Logout_Handler_CsrfTokenClearingService()
    {
        return $this->services['security.logout.handler.csrf_token_clearing'] = new \Symfony\Component\Security\Http\Logout\CsrfTokenClearingLogoutHandler($this->get('security.csrf.token_storage'));
    }

    /**
     * Gets the private 'security.logout.handler.session' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\SessionLogoutHandler
     */
    protected function getSecurity_Logout_Handler_SessionService()
    {
        return $this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator($this->get('request_stack', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('security.token_storage', ContainerInterface::NULL_ON_INVALID_REFERENCE));

        $instance->registerListener('cnrao', 'cnrao_logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('main', 'psm_logout', 'logout', '_csrf_token', NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_RECEPTION' => array(0 => 'ROLE_ASSISTANT'), 'ROLE_INFIRMIER' => array(0 => 'ROLE_ASSISTANT'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN')));
    }

    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     */
    protected function getSession_Storage_MetadataBagService()
    {
        return $this->services['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', '0');
    }

    /**
     * Gets the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.
     *
     * @return \Swift_Events_SimpleEventDispatcher
     */
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }

    /**
     * Gets the private 'templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), __DIR__);
    }

    /**
     * Gets the private 'twig.form.renderer' shared service.
     *
     * @return \Symfony\Bridge\Twig\Form\TwigRenderer
     */
    protected function getTwig_Form_RendererService()
    {
        return $this->services['twig.form.renderer'] = new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'AvanzuAdminThemeBundle:layout:form-theme.html.twig', 2 => 'SCDatetimepickerBundle:Form:div_layout.html.twig', 3 => 'SCDatetimepickerBundle:Form:jquery_layout.html.twig', 4 => 'SCDatetimepickerBundle:Form:stylesheet_layout.html.twig')), $this->get('security.csrf.token_manager', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($name)
    {
        $name = strtolower($name);

        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }

        return $this->parameters[$name];
    }

    /**
     * {@inheritdoc}
     */
    public function hasParameter($name)
    {
        $name = strtolower($name);

        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    /**
     * {@inheritdoc}
     */
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }

        return $this->parameterBag;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => $this->targetDirs[2],
            'kernel.environment' => 'prod',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.cache_dir' => __DIR__,
            'kernel.logs_dir' => ($this->targetDirs[2].'\\logs'),
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'AvanzuAdminThemeBundle' => 'Avanzu\\AdminThemeBundle\\AvanzuAdminThemeBundle',
                'ParametreBundle' => 'PS\\ParametreBundle\\ParametreBundle',
                'SiteBundle' => 'PS\\SiteBundle\\SiteBundle',
                'UtilisateurBundle' => 'PS\\UtilisateurBundle\\UtilisateurBundle',
                'GestionBundle' => 'PS\\GestionBundle\\GestionBundle',
                'APYDataGridBundle' => 'APY\\DataGridBundle\\APYDataGridBundle',
                'KnpPaginatorBundle' => 'Knp\\Bundle\\PaginatorBundle\\KnpPaginatorBundle',
                'EnseparHtml2pdfBundle' => 'Ensepar\\Html2pdfBundle\\EnseparHtml2pdfBundle',
                'ObHighchartsBundle' => 'Ob\\HighchartsBundle\\ObHighchartsBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'PSApiBundle' => 'PS\\ApiBundle\\PSApiBundle',
                'NelmioCorsBundle' => 'Nelmio\\CorsBundle\\NelmioCorsBundle',
                'LexikJWTAuthenticationBundle' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\LexikJWTAuthenticationBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'IvoryBase64FileBundle' => 'Ivory\\Base64FileBundle\\IvoryBase64FileBundle',
                'SCDatetimepickerBundle' => 'SC\\DatetimepickerBundle\\SCDatetimepickerBundle',
                'FOSJsRoutingBundle' => 'FOS\\JsRoutingBundle\\FOSJsRoutingBundle',
                'PhpSpreadsheetBundle' => 'Yectep\\PhpSpreadsheetBundle\\PhpSpreadsheetBundle',
                'JMSI18nRoutingBundle' => 'JMS\\I18nRoutingBundle\\JMSI18nRoutingBundle',
                'JMSTranslationBundle' => 'JMS\\TranslationBundle\\JMSTranslationBundle',
                'PSSpecialiteBundle' => 'PS\\SpecialiteBundle\\PSSpecialiteBundle',
                'MobileBundle' => 'PS\\MobileBundle\\MobileBundle',
            ),
            'kernel.bundles_metadata' => array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'FOSUserBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle'),
                    'namespace' => 'FOS\\UserBundle',
                ),
                'AvanzuAdminThemeBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\avanzu\\admin-theme-bundle'),
                    'namespace' => 'Avanzu\\AdminThemeBundle',
                ),
                'ParametreBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\PS\\ParametreBundle'),
                    'namespace' => 'PS\\ParametreBundle',
                ),
                'SiteBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\PS\\SiteBundle'),
                    'namespace' => 'PS\\SiteBundle',
                ),
                'UtilisateurBundle' => array(
                    'parent' => 'FOSUserBundle',
                    'path' => ($this->targetDirs[3].'\\src\\PS\\UtilisateurBundle'),
                    'namespace' => 'PS\\UtilisateurBundle',
                ),
                'GestionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\PS\\GestionBundle'),
                    'namespace' => 'PS\\GestionBundle',
                ),
                'APYDataGridBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\apy\\datagrid-bundle'),
                    'namespace' => 'APY\\DataGridBundle',
                ),
                'KnpPaginatorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\knplabs\\knp-paginator-bundle'),
                    'namespace' => 'Knp\\Bundle\\PaginatorBundle',
                ),
                'EnseparHtml2pdfBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\ensepar\\html2pdf-bundle\\Ensepar\\Html2pdfBundle'),
                    'namespace' => 'Ensepar\\Html2pdfBundle',
                ),
                'ObHighchartsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\ob\\highcharts-bundle'),
                    'namespace' => 'Ob\\HighchartsBundle',
                ),
                'FOSRestBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ),
                'PSApiBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\PS\\ApiBundle'),
                    'namespace' => 'PS\\ApiBundle',
                ),
                'NelmioCorsBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\nelmio\\cors-bundle'),
                    'namespace' => 'Nelmio\\CorsBundle',
                ),
                'LexikJWTAuthenticationBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\lexik\\jwt-authentication-bundle'),
                    'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle',
                ),
                'JMSSerializerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\jms\\serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ),
                'IvoryBase64FileBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\egeloen\\base64-file-bundle'),
                    'namespace' => 'Ivory\\Base64FileBundle',
                ),
                'SCDatetimepickerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\stephanecollot\\datetimepicker-bundle\\SC\\DatetimepickerBundle'),
                    'namespace' => 'SC\\DatetimepickerBundle',
                ),
                'FOSJsRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\jsrouting-bundle'),
                    'namespace' => 'FOS\\JsRoutingBundle',
                ),
                'PhpSpreadsheetBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\yectep\\phpspreadsheet-bundle\\src'),
                    'namespace' => 'Yectep\\PhpSpreadsheetBundle',
                ),
                'JMSI18nRoutingBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\jms\\i18n-routing-bundle\\JMS\\I18nRoutingBundle'),
                    'namespace' => 'JMS\\I18nRoutingBundle',
                ),
                'JMSTranslationBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\vendor\\jms\\translation-bundle\\JMS\\TranslationBundle'),
                    'namespace' => 'JMS\\TranslationBundle',
                ),
                'PSSpecialiteBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\PS\\SpecialiteBundle'),
                    'namespace' => 'PS\\SpecialiteBundle',
                ),
                'MobileBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'\\src\\PS\\MobileBundle'),
                    'namespace' => 'PS\\MobileBundle',
                ),
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appProdDebugProjectContainer',
            'database_host' => 'srv-captain--mysql-serveur-db',
            'database_port' => 3306,
            'database_name' => 'pass_sante_db',
            'database_user' => 'root',
            'database_password' => 'DataX2023',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'jwt_key_pass_phrase' => '',
            'my_admin_bundle.show_user_listener.class' => 'PS\\GestionBundle\\EventListener\\MyShowUserListener',
            'my_admin_bundle.menu_listener.class' => 'PS\\GestionBundle\\EventListener\\MyMenuItemListListener',
            'my_admin_bundle.breadcrumb_listener.class' => 'PS\\GestionBundle\\EventListener\\MyMenuItemListListener',
            'my_admin_bundle.task_list_listener.class' => 'PS\\GestionBundle\\EventListener\\MyTaskListListener',
            'my_admin_bundle.notification_list_listener.class' => 'PS\\GestionBundle\\EventListener\\MyNotificationListListener',
            'my_admin_bundle.message_list_listener.class' => 'PS\\GestionBundle\\EventListener\\MyMessageListListener',
            'locale' => 'fr',
            'upload_dir' => ($this->targetDirs[2].'/../web/uploads'),
            'signature_dir' => ($this->targetDirs[2].'/../data'),
            'data_dir' => ($this->targetDirs[2].'/../data'),
            'bundle_dir' => ($this->targetDirs[2].'/../web'),
            'bizao_access_token' => 'bktoT1pYUlVrOWJFcDJ6U0lQX1JDNEVRNEY0YTpwU1BkeGJDcEJlNUVPUTFVa1ZGeHo3RERIYUlh',
            'bizao_client_id' => 'nKhOZXRUk9bEp2zSIP_RC4EQ4F4a',
            'bizao_client_secret' => 'pSPdxbCpBe5EOQ1UkVFxz7DDHaIa',
            'bizao_host' => 'https://api.bizao.com',
            'bizao_uri' => '/omoneypay/v1',
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'request_stack.class' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\LazyLoadingFragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\HIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.renderer.esi.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\EsiFragmentRenderer',
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.loader.json.class' => 'Symfony\\Component\\Translation\\Loader\\JsonFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.json.class' => 'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.trusted_proxies' => array(

            ),
            'kernel.default_locale' => 'fr',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.metadata_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag',
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session.handler.write_check.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ),
            'session.save_path' => (__DIR__.'/sessions'),
            'session.metadata.update_threshold' => '0',
            'security.secure_random.class' => 'Symfony\\Component\\Security\\Core\\Util\\SecureRandom',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'form.type_extension.form.request_handler.class' => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\HttpFoundationRequestHandler',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'security.csrf.token_generator.class' => 'Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator',
            'security.csrf.token_storage.class' => 'Symfony\\Component\\Security\\Csrf\\TokenStorage\\SessionTokenStorage',
            'security.csrf.token_manager.class' => 'Symfony\\Component\\Security\\Csrf\\CsrfTokenManager',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.helper.assets.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\AssetsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.code.file_link_format' => NULL,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
            'validator.builder.class' => 'Symfony\\Component\\Validator\\ValidatorBuilderInterface',
            'validator.builder.factory.class' => 'Symfony\\Component\\Validator\\Validation',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.expression.class' => 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator',
            'validator.email.class' => 'Symfony\\Component\\Validator\\Constraints\\EmailValidator',
            'validator.translation_domain' => 'validators',
            'validator.api' => '2.5-bc',
            'fragment.listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\FragmentListener',
            'translator.logging' => true,
            'data_collector.templates' => array(

            ),
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appProdDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appProdDebugProjectContainerUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => ($this->targetDirs[2].'/config/routing.yml'),
            'router.cache_class_prefix' => 'appProdDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'debug.debug_handlers_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\DebugHandlersListener',
            'debug.stopwatch.class' => 'Symfony\\Component\\Stopwatch\\Stopwatch',
            'debug.error_handler.throw_at' => -1,
            'debug.event_dispatcher.class' => 'Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher',
            'debug.container.dump' => (__DIR__.'/appProdDebugProjectContainer.xml'),
            'debug.controller_resolver.class' => 'Symfony\\Component\\HttpKernel\\Controller\\TraceableControllerResolver',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.access.expression_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\ExpressionVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.expression_matcher.class' => 'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.expression_language.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage',
            'security.role_hierarchy.roles' => array(
                'ROLE_RECEPTION' => array(
                    0 => 'ROLE_ASSISTANT',
                ),
                'ROLE_INFIRMIER' => array(
                    0 => 'ROLE_ASSISTANT',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                ),
            ),
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.simple_form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimpleFormAuthenticationListener',
            'security.authentication.listener.simple_preauth.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SimplePreAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.simple.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\SimpleAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.simple_success_failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\SimpleAuthenticationHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bridge\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => false,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.class' => 'Twig\\Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig\\Loader\\ChainLoader',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.extension.debug.stopwatch.class' => 'Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension',
            'twig.extension.expression.class' => 'Symfony\\Bridge\\Twig\\Extension\\ExpressionExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Avanzu\\AdminThemeBundle\\Controller\\ExceptionController',
            'twig.controller.preview_error.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\PreviewErrorController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'AvanzuAdminThemeBundle:layout:form-theme.html.twig',
                2 => 'SCDatetimepickerBundle:Form:div_layout.html.twig',
                3 => 'SCDatetimepickerBundle:Form:jquery_layout.html.twig',
                4 => 'SCDatetimepickerBundle:Form:stylesheet_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.console' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.spool.default.memory.path' => (__DIR__.'/swiftmailer/spool/default'),
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => (__DIR__.'/doctrine/orm/Proxies'),
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'fos_user.backend_type_orm' => true,
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\EventListener\\LastLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => '@FOSUser/Resetting/email.txt.twig',
            'fos_user.registration.confirmation.template' => '@FOSUser/Registration/email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'PS\\UtilisateurBundle\\Entity\\Utilisateur',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Default',
                1 => 'Profile',
            ),
            'fos_user.profile.form.type' => 'app_user_profile_edit',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.registration.confirmation.from_email' => array(
                'info@pass-sante.net' => 'PASS SANTE MOUSSO',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'app_user_registration',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Default',
                1 => 'Registration',
            ),
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.change_password.form.type' => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'info@pass-sante.net' => 'PASS SANTE MOUSSO',
            ),
            'fos_user.resetting.retry_ttl' => 7200,
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'app_user_reset_password',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'PS\\UtilisateurBundle\\Entity\\Groupe',
            'fos_user.group.form.type' => 'FOS\\UserBundle\\Form\\Type\\GroupFormType',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'avanzu_admin_theme.bower_bin' => 'bower ',
            'avanzu_admin_theme.navbar_user_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\NavbarShowUserDemoListener',
            'avanzu_admin_theme.navbar_task_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\NavbarTaskListDemoListener',
            'avanzu_admin_theme.navbar_notify_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\NavbarNotificationListDemoListener',
            'avanzu_admin_theme.navbar_msg_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\NavbarMessageListDemoListener',
            'avanzu_admin_theme.setup_menu_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\SidebarSetupMenuDemoListener',
            'avanzu_admin_theme.exception_controller.class' => 'Avanzu\\AdminThemeBundle\\Controller\\ExceptionController',
            'avanzu_admin_theme.widget_extension.class' => 'Avanzu\\AdminThemeBundle\\Twig\\WidgetExtension',
            'avanzu_admin_theme.theme_manager.class' => 'Avanzu\\AdminThemeBundle\\Theme\\ThemeManager',
            'avanzu_admin_theme.setup_theme_listener.class' => 'Avanzu\\AdminThemeBundle\\EventListener\\SetupThemeListener',
            'avanzu_admin_theme.dependency_resolver.class' => '',
            'avanzu_admin_theme.css_base' => '',
            'avanzu_admin_theme.lte_admin' => '',
            'grid.twig_extension.class' => 'APY\\DataGridBundle\\Twig\\DataGridExtension',
            'grid.class' => 'APY\\DataGridBundle\\Grid\\Grid',
            'grid.manager.class' => 'APY\\DataGridBundle\\Grid\\GridManager',
            'grid.column.text.class' => 'APY\\DataGridBundle\\Grid\\Column\\TextColumn',
            'grid.column.number.class' => 'APY\\DataGridBundle\\Grid\\Column\\NumberColumn',
            'grid.column.boolean.class' => 'APY\\DataGridBundle\\Grid\\Column\\BooleanColumn',
            'grid.column.datetime.class' => 'APY\\DataGridBundle\\Grid\\Column\\DateTimeColumn',
            'grid.column.date.class' => 'APY\\DataGridBundle\\Grid\\Column\\DateColumn',
            'grid.column.time.class' => 'APY\\DataGridBundle\\Grid\\Column\\TimeColumn',
            'grid.column.array.class' => 'APY\\DataGridBundle\\Grid\\Column\\ArrayColumn',
            'grid.column.simple_array.class' => 'APY\\DataGridBundle\\Grid\\Column\\SimpleArrayColumn',
            'grid.column.blank.class' => 'APY\\DataGridBundle\\Grid\\Column\\BlankColumn',
            'grid.column.rank.class' => 'APY\\DataGridBundle\\Grid\\Column\\RankColumn',
            'grid.column.join.class' => 'APY\\DataGridBundle\\Grid\\Column\\JoinColumn',
            'apy_data_grid.limits' => array(
                0 => 50,
                1 => 100,
                2 => 200,
            ),
            'apy_data_grid.theme' => 'APYDataGridBundle::blocks.html.twig',
            'apy_data_grid.persistence' => false,
            'apy_data_grid.no_data_message' => 'No data',
            'apy_data_grid.no_result_message' => 'Aucune donnée disponible!',
            'apy_data_grid.actions_columns_size' => -1,
            'apy_data_grid.actions_columns_title' => 'Actions',
            'apy_data_grid.pagerfanta' => array(
                'enable' => false,
                'view_class' => 'Pagerfanta\\View\\DefaultView',
                'options' => array(
                    'prev_message' => '«',
                    'next_message' => '»',
                ),
            ),
            'knp_paginator.class' => 'Knp\\Component\\Pager\\Paginator',
            'knp_paginator.helper.processor.class' => 'Knp\\Bundle\\PaginatorBundle\\Helper\\Processor',
            'knp_paginator.template.pagination' => 'KnpPaginatorBundle:Pagination:twitter_bootstrap_v4_pagination.html.twig',
            'knp_paginator.template.filtration' => '@KnpPaginator/Pagination/filtration.html.twig',
            'knp_paginator.template.sortable' => 'KnpPaginatorBundle:Pagination:sortable_link.html.twig',
            'knp_paginator.page_range' => 50,
            'html2pdf.orientation' => 'P',
            'html2pdf.format' => 'A4',
            'html2pdf.lang' => 'en',
            'html2pdf.unicode' => true,
            'html2pdf.encoding' => 'UTF-8',
            'html2pdf.margin' => array(
                0 => 10,
                1 => 15,
                2 => 10,
                3 => 15,
            ),
            'ob_highcharts.twig_extension.class' => 'Ob\\HighchartsBundle\\Twig\\HighchartsExtension',
            'fos_rest.format_listener.rules' => NULL,
            'nelmio_cors.map' => array(
                '^/api' => array(
                    'allow_origin' => true,
                    'allow_credentials' => true,
                    'allow_headers' => array(
                        0 => 'origin',
                        1 => 'x-requested-with',
                        2 => 'content-type',
                        3 => 'accept',
                        4 => 'content-type',
                        5 => 'authorization',
                    ),
                    'allow_methods' => array(
                        0 => 'POST',
                        1 => 'PUT',
                        2 => 'GET',
                        3 => 'DELETE',
                        4 => 'PATCH',
                        5 => 'OPTIONS',
                    ),
                    'max_age' => 3600,
                ),
            ),
            'nelmio_cors.defaults' => array(
                'allow_origin' => array(

                ),
                'allow_credentials' => false,
                'allow_headers' => array(

                ),
                'expose_headers' => array(

                ),
                'allow_methods' => array(

                ),
                'max_age' => 0,
                'hosts' => array(

                ),
                'origin_regex' => false,
                'forced_allow_origin_value' => NULL,
            ),
            'nelmio_cors.cors_listener.class' => 'Nelmio\\CorsBundle\\EventListener\\CorsListener',
            'nelmio_cors.options_resolver.class' => 'Nelmio\\CorsBundle\\Options\\Resolver',
            'nelmio_cors.options_provider.config.class' => 'Nelmio\\CorsBundle\\Options\\ConfigProvider',
            'lexik_jwt_authentication.private_key_path' => ($this->targetDirs[2].'/jwt/private.pem'),
            'lexik_jwt_authentication.public_key_path' => ($this->targetDirs[2].'/jwt/public.pem'),
            'lexik_jwt_authentication.pass_phrase' => '',
            'lexik_jwt_authentication.token_ttl' => 3600,
            'lexik_jwt_authentication.user_identity_field' => 'username',
            'lexik_jwt_authentication.encoder.signature_algorithm' => 'RS256',
            'lexik_jwt_authentication.encoder.crypto_engine' => 'openssl',
            'jms_serializer.metadata.file_locator.class' => 'Metadata\\Driver\\FileLocator',
            'jms_serializer.metadata.annotation_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver',
            'jms_serializer.metadata.chain_driver.class' => 'Metadata\\Driver\\DriverChain',
            'jms_serializer.metadata.yaml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\YamlDriver',
            'jms_serializer.metadata.xml_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\XmlDriver',
            'jms_serializer.metadata.php_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\PhpDriver',
            'jms_serializer.metadata.doctrine_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver',
            'jms_serializer.metadata.doctrine_phpcr_type_driver.class' => 'JMS\\Serializer\\Metadata\\Driver\\DoctrinePHPCRTypeDriver',
            'jms_serializer.metadata.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_serializer.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_serializer.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_serializer.event_dispatcher.class' => 'JMS\\Serializer\\EventDispatcher\\LazyEventDispatcher',
            'jms_serializer.camel_case_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CamelCaseNamingStrategy',
            'jms_serializer.identical_property_naming_strategy.class' => 'JMS\\Serializer\\Naming\\IdenticalPropertyNamingStrategy',
            'jms_serializer.serialized_name_annotation_strategy.class' => 'JMS\\Serializer\\Naming\\SerializedNameAnnotationStrategy',
            'jms_serializer.cache_naming_strategy.class' => 'JMS\\Serializer\\Naming\\CacheNamingStrategy',
            'jms_serializer.doctrine_object_constructor.class' => 'JMS\\Serializer\\Construction\\DoctrineObjectConstructor',
            'jms_serializer.unserialize_object_constructor.class' => 'JMS\\Serializer\\Construction\\UnserializeObjectConstructor',
            'jms_serializer.version_exclusion_strategy.class' => 'JMS\\Serializer\\Exclusion\\VersionExclusionStrategy',
            'jms_serializer.serializer.class' => 'JMS\\Serializer\\Serializer',
            'jms_serializer.twig_extension.class' => 'JMS\\Serializer\\Twig\\SerializerExtension',
            'jms_serializer.twig_runtime_extension.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeExtension',
            'jms_serializer.twig_runtime_extension_helper.class' => 'JMS\\Serializer\\Twig\\SerializerRuntimeHelper',
            'jms_serializer.templating.helper.class' => 'JMS\\SerializerBundle\\Templating\\SerializerHelper',
            'jms_serializer.json_serialization_visitor.class' => 'JMS\\Serializer\\JsonSerializationVisitor',
            'jms_serializer.json_serialization_visitor.options' => 0,
            'jms_serializer.json_deserialization_visitor.class' => 'JMS\\Serializer\\JsonDeserializationVisitor',
            'jms_serializer.xml_serialization_visitor.class' => 'JMS\\Serializer\\XmlSerializationVisitor',
            'jms_serializer.xml_deserialization_visitor.class' => 'JMS\\Serializer\\XmlDeserializationVisitor',
            'jms_serializer.xml_deserialization_visitor.doctype_whitelist' => array(

            ),
            'jms_serializer.xml_serialization_visitor.format_output' => true,
            'jms_serializer.yaml_serialization_visitor.class' => 'JMS\\Serializer\\YamlSerializationVisitor',
            'jms_serializer.handler_registry.class' => 'JMS\\Serializer\\Handler\\LazyHandlerRegistry',
            'jms_serializer.datetime_handler.class' => 'JMS\\Serializer\\Handler\\DateHandler',
            'jms_serializer.array_collection_handler.class' => 'JMS\\Serializer\\Handler\\ArrayCollectionHandler',
            'jms_serializer.php_collection_handler.class' => 'JMS\\Serializer\\Handler\\PhpCollectionHandler',
            'jms_serializer.form_error_handler.class' => 'JMS\\Serializer\\Handler\\FormErrorHandler',
            'jms_serializer.constraint_violation_handler.class' => 'JMS\\Serializer\\Handler\\ConstraintViolationHandler',
            'jms_serializer.doctrine_proxy_subscriber.class' => 'JMS\\Serializer\\EventDispatcher\\Subscriber\\DoctrineProxySubscriber',
            'jms_serializer.stopwatch_subscriber.class' => 'JMS\\SerializerBundle\\Serializer\\StopwatchEventSubscriber',
            'jms_serializer.configured_context_factory.class' => 'JMS\\SerializerBundle\\ContextFactory\\ConfiguredContextFactory',
            'jms_serializer.expression_evaluator.class' => 'JMS\\Serializer\\Expression\\ExpressionEvaluator',
            'jms_serializer.expression_language.class' => 'Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage',
            'jms_serializer.expression_language.function_provider.class' => 'JMS\\SerializerBundle\\ExpressionLanguage\\BasicSerializerFunctionsProvider',
            'jms_serializer.accessor_strategy.default.class' => 'JMS\\Serializer\\Accessor\\DefaultAccessorStrategy',
            'jms_serializer.accessor_strategy.expression.class' => 'JMS\\Serializer\\Accessor\\ExpressionAccessorStrategy',
            'jms_serializer.cache.cache_warmer.class' => 'JMS\\SerializerBundle\\Cache\\CacheWarmer',
            'sc_datetimepicker.form.options' => array(
                'formatter' => 'js',
            ),
            'fos_js_routing.extractor.class' => 'FOS\\JsRoutingBundle\\Extractor\\ExposedRoutesExtractor',
            'fos_js_routing.controller.class' => 'FOS\\JsRoutingBundle\\Controller\\Controller',
            'fos_js_routing.normalizer.route_collection.class' => 'FOS\\JsRoutingBundle\\Serializer\\Normalizer\\RouteCollectionNormalizer',
            'fos_js_routing.normalizer.routes_response.class' => 'FOS\\JsRoutingBundle\\Serializer\\Normalizer\\RoutesResponseNormalizer',
            'fos_js_routing.denormalizer.route_collection.class' => 'FOS\\JsRoutingBundle\\Serializer\\Denormalizer\\RouteCollectionDenormalizer',
            'fos_js_routing.request_context_base_url' => NULL,
            'fos_js_routing.cache_control' => array(
                'enabled' => false,
            ),
            'phpofficebundle_spreadsheet_class' => 'Yectep\\PhpSpreadsheetBundle\\Factory',
            'jms_i18n_routing.router.class' => 'JMS\\I18nRoutingBundle\\Router\\I18nRouter',
            'jms_i18n_routing.locale_resolver.class' => 'JMS\\I18nRoutingBundle\\Router\\DefaultLocaleResolver',
            'jms_i18n_routing.loader.class' => 'JMS\\I18nRoutingBundle\\Router\\I18nLoader',
            'jms_i18n_routing.route_exclusion_strategy.class' => 'JMS\\I18nRoutingBundle\\Router\\DefaultRouteExclusionStrategy',
            'jms_i18n_routing.pattern_generation_strategy.class' => 'JMS\\I18nRoutingBundle\\Router\\DefaultPatternGenerationStrategy',
            'jms_i18n_routing.locale_choosing_listener.class' => 'JMS\\I18nRoutingBundle\\EventListener\\LocaleChoosingListener',
            'jms_i18n_routing.cookie_setting_listener.class' => 'JMS\\I18nRoutingBundle\\EventListener\\CookieSettingListener',
            'jms_i18n_routing.route_translation_extractor.class' => 'JMS\\I18nRoutingBundle\\Translation\\RouteTranslationExtractor',
            'jms_i18n_routing.default_locale' => 'fr',
            'jms_i18n_routing.locales' => array(
                0 => 'fr',
                1 => 'en',
                2 => 'es',
            ),
            'jms_i18n_routing.catalogue' => 'routes',
            'jms_i18n_routing.strategy' => 'prefix_except_default',
            'jms_i18n_routing.redirect_to_host' => true,
            'jms_i18n_routing.cookie.name' => 'hl',
            'jms_translation.twig_extension.class' => 'JMS\\TranslationBundle\\Twig\\TranslationExtension',
            'jms_translation.controller.translate_controller.class' => 'JMS\\TranslationBundle\\Controller\\TranslateController',
            'jms_translation.controller.api_controller.class' => 'JMS\\TranslationBundle\\Controller\\ApiController',
            'jms_translation.extractor_manager.class' => 'JMS\\TranslationBundle\\Translation\\ExtractorManager',
            'jms_translation.extractor.file_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\FileExtractor',
            'jms_translation.extractor.file.default_php_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\DefaultPhpFileExtractor',
            'jms_translation.extractor.file.translation_container_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TranslationContainerExtractor',
            'jms_translation.extractor.file.twig_extractor' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\TwigFileExtractor',
            'jms_translation.extractor.file.form_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\FormExtractor',
            'jms_translation.extractor.file.validation_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\ValidationExtractor',
            'jms_translation.extractor.file.authentication_message_extractor.class' => 'JMS\\TranslationBundle\\Translation\\Extractor\\File\\AuthenticationMessagesExtractor',
            'jms_translation.loader.symfony.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\Symfony\\XliffLoader',
            'jms_translation.loader.xliff_loader.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\XliffLoader',
            'jms_translation.loader.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Loader\\SymfonyLoaderAdapter',
            'jms_translation.loader_manager.class' => 'JMS\\TranslationBundle\\Translation\\LoaderManager',
            'jms_translation.dumper.php_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\PhpDumper',
            'jms_translation.dumper.xliff_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\XliffDumper',
            'jms_translation.dumper.yaml_dumper.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\YamlDumper',
            'jms_translation.dumper.symfony_adapter.class' => 'JMS\\TranslationBundle\\Translation\\Dumper\\SymfonyDumperAdapter',
            'jms_translation.file_writer.class' => 'JMS\\TranslationBundle\\Translation\\FileWriter',
            'jms_translation.updater.class' => 'JMS\\TranslationBundle\\Translation\\Updater',
            'jms_translation.config_factory.class' => 'JMS\\TranslationBundle\\Translation\\ConfigFactory',
            'jms_translation.file_source_factory.class' => 'JMS\\TranslationBundle\\Translation\\FileSourceFactory',
            'jms_translation.source_language' => 'en',
            'jms_translation.locales' => array(

            ),
            'jms_translation.dumper.add_date' => true,
            'jms_translation.dumper.add_references' => true,
            'console.command.ids' => array(
                0 => 'doctrine_cache.contains_command',
                1 => 'doctrine_cache.delete_command',
                2 => 'doctrine_cache.flush_command',
                3 => 'doctrine_cache.stats_command',
                4 => 'doctrine.database_create_command',
                5 => 'doctrine.database_drop_command',
                6 => 'doctrine.generate_entities_command',
                7 => 'doctrine.query_sql_command',
                8 => 'doctrine.cache_clear_metadata_command',
                9 => 'doctrine.cache_clear_query_cache_command',
                10 => 'doctrine.cache_clear_result_command',
                11 => 'doctrine.cache_collection_region_command',
                12 => 'doctrine.mapping_convert_command',
                13 => 'doctrine.schema_create_command',
                14 => 'doctrine.schema_drop_command',
                15 => 'doctrine.ensure_production_settings_command',
                16 => 'doctrine.clear_entity_region_command',
                17 => 'doctrine.database_import_command',
                18 => 'doctrine.mapping_info_command',
                19 => 'doctrine.clear_query_region_command',
                20 => 'doctrine.query_dql_command',
                21 => 'doctrine.schema_update_command',
                22 => 'doctrine.schema_validate_command',
                23 => 'doctrine.mapping_import_command',
                24 => 'fos_user.command.activate_user',
                25 => 'fos_user.command.change_password',
                26 => 'fos_user.command.create_user',
                27 => 'fos_user.command.deactivate_user',
                28 => 'fos_user.command.demote_user',
                29 => 'fos_user.command.promote_user',
                30 => 'lexik_jwt_authentication.check_config_command',
                31 => 'fos_js_routing.dump_command',
                32 => 'fos_js_routing.router_debug_exposed_command',
            ),
        );
    }
}
