<?php

$lang["simplesaml_configuration"] = 'Configuración de SimpleSAML';
$lang["simplesaml_main_options"] = 'Opciones de uso';
$lang["simplesaml_site_block"] = 'Utilice SAML para bloquear completamente el acceso al sitio, si se establece en verdadero, entonces nadie puede acceder al sitio, incluso de forma anónima, sin autenticarse';
$lang["simplesaml_allowedpaths"] = 'Lista de rutas adicionales permitidas que pueden evitar el requisito de SAML';
$lang["simplesaml_allow_standard_login"] = '¿Permitir que los usuarios inicien sesión con cuentas estándar y también mediante SAML SSO? ADVERTENCIA: Deshabilitar esto puede arriesgar el bloqueo de todos los usuarios del sistema si falla la autenticación SAML';
$lang["simplesaml_use_sso"] = 'Utilice SSO para iniciar sesión';
$lang["simplesaml_idp_configuration"] = 'Configuración de IdP';
$lang["simplesaml_idp_configuration_description"] = 'Utilice lo siguiente para configurar el complemento y hacerlo funcionar con su proveedor de identidad (IdP)';
$lang["simplesaml_username_attribute"] = 'Atributo(s) a utilizar para el nombre de usuario. Si es una concatenación de dos atributos, por favor sepárelos con una coma';
$lang["simplesaml_username_separator"] = 'Si se unen campos para el nombre de usuario, use este carácter como separador';
$lang["simplesaml_fullname_attribute"] = 'Atributo(s) a utilizar para el nombre completo. Si esto es una concatenación de dos atributos, por favor sepárelos con una coma';
$lang["simplesaml_fullname_separator"] = 'Si se unen campos para el nombre completo, utilice este carácter como separador';
$lang["simplesaml_email_attribute"] = 'Atributo a utilizar para la dirección de correo electrónico';
$lang["simplesaml_group_attribute"] = 'Atributo a utilizar para determinar la pertenencia a un grupo';
$lang["simplesaml_username_suffix"] = 'Sufijo para agregar a los nombres de usuario creados para distinguirlos de las cuentas estándar de ResourceSpace';
$lang["simplesaml_update_group"] = 'Actualizar el grupo de usuario en cada inicio de sesión. Si no se utiliza el atributo de grupo SSO para determinar el acceso, establezca esto en falso para que los usuarios puedan ser movidos manualmente entre grupos';
$lang["simplesaml_groupmapping"] = 'Mapeo de grupos de ResourceSpace - SAML';
$lang["simplesaml_fallback_group"] = 'Grupo de usuario predeterminado que se utilizará para los usuarios recién creados';
$lang["simplesaml_samlgroup"] = 'Grupo SAML';
$lang["simplesaml_rsgroup"] = 'Grupo de ResourceSpace';
$lang["simplesaml_priority"] = 'Prioridad (un número más alto tendrá precedencia)';
$lang["simplesaml_addrow"] = 'Agregar mapeo';
$lang["simplesaml_service_provider"] = 'Nombre del proveedor de servicios local (SP)';
$lang["simplesaml_prefer_standard_login"] = 'Preferir inicio de sesión estándar (redirigir a la página de inicio de sesión por defecto)';
$lang["simplesaml_sp_configuration"] = 'La configuración del proveedor de servicios simplesaml debe completarse para poder utilizar este complemento. Consulte el artículo de la Base de Conocimientos para obtener más información';
$lang["simplesaml_custom_attributes"] = 'Atributos personalizados para registrar en el registro de usuario';
$lang["simplesaml_custom_attribute_label"] = 'Atributo SSO';
$lang["simplesaml_usercomment"] = 'Creado por el plugin SimpleSAML';
$lang["origin_simplesaml"] = 'Plugin de SimpleSAML';
$lang["simplesaml_lib_path_label"] = 'Ruta de la librería SAML (por favor especifique la ruta completa del servidor)';
$lang["simplesaml_login"] = '¿Utilizar credenciales SAML para iniciar sesión en ResourceSpace? (Esto solo es relevante si la opción anterior está habilitada)';
$lang["simplesaml_create_new_match_email"] = 'Coincidencia de correo electrónico: Antes de crear nuevos usuarios, compruebe si el correo electrónico del usuario SAML coincide con el correo electrónico de una cuenta existente en RS. Si se encuentra una coincidencia, el usuario SAML "adoptará" esa cuenta';
$lang["simplesaml_allow_duplicate_email"] = '¿Permitir la creación de nuevas cuentas si ya existen cuentas de ResourceSpace con la misma dirección de correo electrónico? (esto se anula si se establece una coincidencia de correo electrónico arriba y se encuentra una coincidencia)';
$lang["simplesaml_multiple_email_match_subject"] = 'ResourceSpace SAML - intento de inicio de sesión con correo electrónico en conflicto';
$lang["simplesaml_multiple_email_match_text"] = 'Un nuevo usuario SAML ha accedido al sistema, pero ya existe más de una cuenta con la misma dirección de correo electrónico.';
$lang["simplesaml_multiple_email_notify"] = 'Dirección de correo electrónico para notificar si se encuentra un conflicto de correo electrónico';
$lang["simplesaml_duplicate_email_error"] = 'Ya existe una cuenta con la misma dirección de correo electrónico. Por favor, contacte a su administrador.';
$lang["simplesaml_usermatchcomment"] = 'Actualizado a usuario SAML por el plugin SimpleSAML.';
$lang["simplesaml_usercreated"] = 'Creado nuevo usuario SAML';
$lang["simplesaml_duplicate_email_behaviour"] = 'Gestión de cuentas duplicadas';
$lang["simplesaml_duplicate_email_behaviour_description"] = 'Esta sección controla lo que sucede si un nuevo usuario SAML que inicia sesión entra en conflicto con una cuenta existente';
$lang["simplesaml_authorisation_rules_header"] = 'Regla de autorización';
$lang["simplesaml_authorisation_rules_description"] = 'Habilitar que ResourceSpace pueda ser configurado con autorización local adicional de usuarios basada en un atributo extra (es decir, afirmación/reclamo) en la respuesta del IdP. Esta afirmación será utilizada por el complemento para determinar si el usuario tiene permiso para iniciar sesión en ResourceSpace o no.';
$lang["simplesaml_authorisation_claim_name_label"] = 'Nombre del atributo (afirmación/reclamo)';
$lang["simplesaml_authorisation_claim_value_label"] = 'Valor de atributo (afirmación/reclamo)';
$lang["simplesaml_authorisation_login_error"] = '¡No tienes acceso a esta aplicación! ¡Por favor, contacta al administrador de tu cuenta!';
$lang["simplesaml_authorisation_version_error"] = 'IMPORTANTE: Su configuración de SimpleSAML debe ser actualizada. Por favor, consulte la sección \'<a href=\'https://www.resourcespace.com/knowledge-base/plugins/simplesaml#saml_instructions_migrate\' target=\'_blank\'>Migración del SP para usar la configuración de ResourceSpace</a>\' en la Base de Conocimientos para obtener más información';
$lang["simplesaml_healthcheck_error"] = 'Error del plugin SimpleSAML';
$lang["simplesaml_rsconfig"] = '¿Usar archivos de configuración estándar de ResourceSpace para establecer la configuración de SP y los metadatos? Si se establece en falso, entonces se requiere la edición manual de los archivos';
$lang["simplesaml_sp_generate_config"] = 'Generar configuración de SP';
$lang["simplesaml_sp_config"] = 'Configuración del proveedor de servicios (SP)';
$lang["simplesaml_sp_data"] = 'Información del Proveedor de Servicios (SP)';
$lang["simplesaml_idp_section"] = 'IdP se refiere a "Proveedor de Identidad" en español';
$lang["simplesaml_idp_metadata_xml"] = 'Pegue el XML de metadatos del IdP';
$lang["simplesaml_sp_cert_path"] = 'Ruta al archivo de certificado SP (dejar vacío para generar, pero completar los detalles del certificado a continuación)';
$lang["simplesaml_sp_key_path"] = 'Ruta al archivo de clave SP (.pem) (dejar vacío para generar)';
$lang["simplesaml_sp_idp"] = 'Identificador de IdP (dejar en blanco si se está procesando XML)';
$lang["simplesaml_saml_config_output"] = 'Pegue esto en su archivo de configuración de ResourceSpace';
$lang["simplesaml_sp_cert_info"] = 'Información del certificado (requerido)';
$lang["simplesaml_sp_cert_countryname"] = 'Código de país (solo 2 caracteres)';
$lang["simplesaml_sp_cert_stateorprovincename"] = 'Nombre del estado, condado o provincia';
$lang["simplesaml_sp_cert_localityname"] = 'Localidad (por ejemplo, pueblo/ciudad)';
$lang["simplesaml_sp_cert_organizationname"] = 'Nombre de la organización';
$lang["simplesaml_sp_cert_organizationalunitname"] = 'Unidad organizativa / departamento';
$lang["simplesaml_sp_cert_commonname"] = 'Nombre común (por ejemplo, sp.acme.org)';
$lang["simplesaml_sp_cert_emailaddress"] = 'Dirección de correo electrónico';
$lang["simplesaml_sp_cert_invalid"] = 'Información de certificado inválida';
$lang["simplesaml_sp_cert_gen_error"] = 'No se puede generar el certificado';
$lang["simplesaml_sp_samlphp_link"] = 'Visite el sitio de prueba de SimpleSAMLphp';
$lang["simplesaml_sp_technicalcontact_name"] = 'Nombre del contacto técnico';
$lang["simplesaml_sp_technicalcontact_email"] = 'Correo electrónico de contacto técnico';
$lang["simplesaml_sp_auth.adminpassword"] = 'Contraseña de administrador del sitio de prueba de SP';
$lang["simplesaml_acs_url"] = 'ACS URL / Reply URL se traduce como URL de ACS / URL de respuesta';
$lang["simplesaml_entity_id"] = 'Identificador de entidad/URL de metadatos';
$lang["simplesaml_single_logout_url"] = 'URL de cierre de sesión único';
$lang["simplesaml_start_url"] = 'Inicio/URL de inicio de sesión';
$lang["simplesaml_existing_config"] = 'Siga las instrucciones de la Base de Conocimiento para migrar su configuración SAML existente';
$lang["simplesaml_test_site_url"] = 'URL del sitio de prueba de SimpleSAML';
$lang["simplesaml_allow_public_shares"] = '¿Si se bloquea el sitio, permitir que las comparticiones públicas eviten la autenticación SAML?';
$lang["plugin-simplesaml-title"] = 'SAML Simple';
$lang["plugin-simplesaml-desc"] = 'Requerir autenticación SAML para acceder a ResourceSpace';
$lang["simplesaml_idp_certs"] = 'certificados SAML IdP';
$lang["simplesaml_idp_cert_expiring"] = 'Certificado de IdP %idpname expirando a las %expiretime';
$lang["simplesaml_idp_cert_expired"] = 'El certificado de IdP %idpname expiró a las %expiretime';
$lang["simplesaml_idp_cert_expires"] = 'El certificado de IdP %idpname expira a las %expiretime';
$lang["simplesaml_check_idp_cert_expiry"] = '¿Verificar la expiración del certificado IdP?';

$lang["simplesaml_use_www_label"] = '¿Permitir solicitudes de metadatos SP para la ruta "www"? (cambiar a falso requerirá que el IdP vuelva a intercambiar los metadatos SP)';
$lang["simplesaml_use_www_error"] = '¡Advertencia! El complemento está utilizando las rutas "www" heredadas. Si esta es una configuración nueva, ¡cámbiala ahora! De lo contrario, coordina con el administrador del IdP para que pueda actualizar los metadatos del SP en consecuencia.';