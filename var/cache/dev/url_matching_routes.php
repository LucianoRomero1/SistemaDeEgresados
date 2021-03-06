<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/altaCarreras' => [[['_route' => 'altaCarreras', '_controller' => 'App\\Controller\\CarreraController::altaCarreras'], null, null, null, false, false, null]],
        '/admin/verCarreras' => [[['_route' => 'verCarreras', '_controller' => 'App\\Controller\\CarreraController::verCarreras'], null, null, null, false, false, null]],
        '/admin/altaDocumentos' => [[['_route' => 'altaDocumentos', '_controller' => 'App\\Controller\\DocumentoController::altaDocumentos'], null, null, null, false, false, null]],
        '/admin/verDocumentos' => [[['_route' => 'verDocumentos', '_controller' => 'App\\Controller\\DocumentoController::verDocumentos'], null, null, null, false, false, null]],
        '/admin/altaDatosPersonales' => [[['_route' => 'altaDatosPersonales', '_controller' => 'App\\Controller\\EgresadoController::altaDatosPersonales'], null, null, null, false, false, null]],
        '/admin/verEgresados' => [[['_route' => 'verEgresados', '_controller' => 'App\\Controller\\EgresadoController::verEgresados'], null, null, null, false, false, null]],
        '/admin/datosPersonalesGraduado' => [[['_route' => 'datosPersonalesGraduado', '_controller' => 'App\\Controller\\GraduadoController::datosPersonalesGraduado'], null, null, null, false, false, null]],
        '/admin/verGraduados' => [[['_route' => 'verGraduados', '_controller' => 'App\\Controller\\GraduadoController::verGraduados'], null, null, null, false, false, null]],
        '/backIntranet' => [[['_route' => 'backIntranet', '_controller' => 'App\\Controller\\LoginController::backIntranet'], null, null, null, false, false, null]],
        '/invitado' => [[['_route' => 'invitado', '_controller' => 'App\\Controller\\RoleController::invitado'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/menuPrincipal' => [[['_route' => 'menuPrincipal', '_controller' => 'App\\Controller\\SistemaController::menuPrincipal'], null, null, null, false, false, null]],
        '/admin/datosAcademicos' => [[['_route' => 'datosAcademicos', '_controller' => 'App\\Controller\\SistemaController::datosAcademicos'], null, null, null, false, false, null]],
        '/admin/altaTitulos' => [[['_route' => 'altaTitulos', '_controller' => 'App\\Controller\\TituloController::altaTitulos'], null, null, null, false, false, null]],
        '/admin/verTitulos' => [[['_route' => 'verTitulos', '_controller' => 'App\\Controller\\TituloController::verTitulos'], null, null, null, false, false, null]],
        '/superadmin/roles' => [[['_route' => 'roles', '_controller' => 'App\\Controller\\UsuarioController::OtorgarRol'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|modificar(?'
                        .'|Carreras/([^/]++)(*:208)'
                        .'|D(?'
                            .'|ocumentos/([^/]++)(*:238)'
                            .'|atos(?'
                                .'|Personales(?'
                                    .'|/([^/]++)(*:275)'
                                    .'|Graduado/([^/]++)(*:300)'
                                .')'
                                .'|A(?'
                                    .'|cademicos/([^/]++)(*:331)'
                                    .'|dministrativos/([^/]++)(*:362)'
                                .')'
                            .')'
                        .')'
                        .'|Archivos/([^/]++)(*:390)'
                        .'|ImagenGraduado/([^/]++)(*:421)'
                        .'|Titul(?'
                            .'|acionesGraduado/([^/]++)/([^/]++)(*:470)'
                            .'|os/([^/]++)(*:489)'
                        .')'
                    .')'
                    .'|eliminar(?'
                        .'|Carreras/([^/]++)(*:527)'
                        .'|Documentos/([^/]++)(*:554)'
                        .'|Egresados/([^/]++)(*:580)'
                        .'|PDF/([^/]++)(*:600)'
                        .'|Imagen(?'
                            .'|/([^/]++)/([^/]++)(*:635)'
                            .'|TED/([^/]++)(*:655)'
                        .')'
                        .'|Titul(?'
                            .'|acion/([^/]++)/([^/]++)(*:695)'
                            .'|os/([^/]++)(*:714)'
                        .')'
                        .'|Graduado/([^/]++)(*:740)'
                    .')'
                    .'|a(?'
                        .'|lta(?'
                            .'|DatosA(?'
                                .'|cademicos/([^/]++)(*:786)'
                                .'|dministrativos/([^/]++)(*:817)'
                            .')'
                            .'|Archivos/([^/]++)(*:843)'
                        .')'
                        .'|gregarTitulacion/([^/]++)(*:877)'
                    .')'
                    .'|ver(?'
                        .'|PDF/([^/]++)(*:904)'
                        .'|Imagen(?'
                            .'|/([^/]++)(*:930)'
                            .'|TED/([^/]++)(*:950)'
                        .')'
                        .'|TitulacionesGraduado/([^/]++)(*:988)'
                    .')'
                    .'|generatePdf/([^/]++)(*:1017)'
                    .'|imagenGraduado/([^/]++)(*:1049)'
                    .'|titulacionesGraduado/([^/]++)(*:1087)'
                .')'
                .'|/login/([^/]++)/([^/]++)/([^/]++)(*:1130)'
                .'|/superadmin/(?'
                    .'|cambio(?'
                        .'|Superadmin/([^/]++)(*:1182)'
                        .'|Admin/([^/]++)(*:1205)'
                        .'|User/([^/]++)(*:1227)'
                    .')'
                    .'|eliminarUser/([^/]++)(*:1258)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => 'modificarCarreras', '_controller' => 'App\\Controller\\CarreraController::modificarCarreras'], ['id'], null, null, false, true, null]],
        238 => [[['_route' => 'modificarDocumentos', '_controller' => 'App\\Controller\\DocumentoController::modificarDocumentos'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'modificarDatosPersonales', '_controller' => 'App\\Controller\\EgresadoController::modificarDatosPersonales'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'modificarDatosPersonalesGraduado', '_controller' => 'App\\Controller\\GraduadoController::modificarDatosPersonalesGraduado'], ['id'], null, null, false, true, null]],
        331 => [[['_route' => 'modificarDatosAcademicos', '_controller' => 'App\\Controller\\EgresadoController::modificarDatosAcademicos'], ['id'], null, null, false, true, null]],
        362 => [[['_route' => 'modificarDatosAdministrativos', '_controller' => 'App\\Controller\\EgresadoController::modificarDatosAdministrativos'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'modificarArchivos', '_controller' => 'App\\Controller\\EgresadoController::modificarArchivos'], ['id'], null, null, false, true, null]],
        421 => [[['_route' => 'modificarImagenGraduado', '_controller' => 'App\\Controller\\GraduadoController::modificarImagenGraduado'], ['id'], null, null, false, true, null]],
        470 => [[['_route' => 'modificarTitulacionesGraduado', '_controller' => 'App\\Controller\\GraduadoController::modificarTitulacionesGraduado'], ['id', 'idGrad'], null, null, false, true, null]],
        489 => [[['_route' => 'modificarTitulos', '_controller' => 'App\\Controller\\TituloController::modificarTitulos'], ['id'], null, null, false, true, null]],
        527 => [[['_route' => 'eliminarCarreras', '_controller' => 'App\\Controller\\CarreraController::eliminarCarreras'], ['id'], null, null, false, true, null]],
        554 => [[['_route' => 'eliminarDocumentos', '_controller' => 'App\\Controller\\DocumentoController::eliminarDocumentos'], ['id'], null, null, false, true, null]],
        580 => [[['_route' => 'eliminarEgresados', '_controller' => 'App\\Controller\\EgresadoController::eliminarEgresados'], ['id'], null, null, false, true, null]],
        600 => [[['_route' => 'eliminarPDF', '_controller' => 'App\\Controller\\EgresadoController::eliminarPDF'], ['id'], null, null, false, true, null]],
        635 => [[['_route' => 'eliminarImagen', '_controller' => 'App\\Controller\\EgresadoController::eliminarImagen'], ['idImagen', 'id'], null, null, false, true, null]],
        655 => [[['_route' => 'eliminarImagenTED', '_controller' => 'App\\Controller\\GraduadoController::eliminarImagenTED'], ['id'], null, null, false, true, null]],
        695 => [[['_route' => 'eliminarTitulacion', '_controller' => 'App\\Controller\\GraduadoController::eliminarTitulacion'], ['id', 'idGrad'], null, null, false, true, null]],
        714 => [[['_route' => 'eliminarTitulos', '_controller' => 'App\\Controller\\TituloController::eliminarTitulos'], ['id'], null, null, false, true, null]],
        740 => [[['_route' => 'eliminarGraduado', '_controller' => 'App\\Controller\\GraduadoController::eliminarGraduado'], ['id'], null, null, false, true, null]],
        786 => [[['_route' => 'altaDatosAcademicos', '_controller' => 'App\\Controller\\EgresadoController::altaDatosAcademicos'], ['id'], null, null, false, true, null]],
        817 => [[['_route' => 'altaDatosAdministrativos', '_controller' => 'App\\Controller\\EgresadoController::altaDatosAdministrativos'], ['id'], null, null, false, true, null]],
        843 => [[['_route' => 'altaArchivos', '_controller' => 'App\\Controller\\EgresadoController::altaArchivos'], ['id'], null, null, false, true, null]],
        877 => [[['_route' => 'agregarTitulacion', '_controller' => 'App\\Controller\\GraduadoController::agregarTitulacion'], ['id'], null, null, false, true, null]],
        904 => [[['_route' => 'verPDF', '_controller' => 'App\\Controller\\EgresadoController::verPDF'], ['id'], null, null, false, true, null]],
        930 => [[['_route' => 'verImagen', '_controller' => 'App\\Controller\\EgresadoController::verImagen'], ['nombreImagen'], null, null, false, true, null]],
        950 => [[['_route' => 'verImagenTED', '_controller' => 'App\\Controller\\GraduadoController::verImagenTED'], ['id'], null, null, false, true, null]],
        988 => [[['_route' => 'verTitulacionesGraduado', '_controller' => 'App\\Controller\\GraduadoController::verTitulacionesGraduado'], ['id'], null, null, false, true, null]],
        1017 => [[['_route' => 'generatePdf', '_controller' => 'App\\Controller\\EgresadoController::generatePdf'], ['id'], null, null, false, true, null]],
        1049 => [[['_route' => 'imagenGraduado', '_controller' => 'App\\Controller\\GraduadoController::imagenGraduado'], ['id'], null, null, false, true, null]],
        1087 => [[['_route' => 'titulacionesGraduado', '_controller' => 'App\\Controller\\GraduadoController::titulacionesGraduado'], ['id'], null, null, false, true, null]],
        1130 => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::login'], ['email', 'rol', 'estado'], null, null, false, true, null]],
        1182 => [[['_route' => 'cambioSuperadmin', '_controller' => 'App\\Controller\\UsuarioController::cambioSuperAdmin'], ['id'], null, null, false, true, null]],
        1205 => [[['_route' => 'cambioAdmin', '_controller' => 'App\\Controller\\UsuarioController::cambioAdmin'], ['id'], null, null, false, true, null]],
        1227 => [[['_route' => 'cambioUser', '_controller' => 'App\\Controller\\UsuarioController::cambioUser'], ['id'], null, null, false, true, null]],
        1258 => [
            [['_route' => 'eliminarUser', '_controller' => 'App\\Controller\\UsuarioController::eliminarUser'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
