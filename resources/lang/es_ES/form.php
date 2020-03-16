<?php

/**
 * form.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // new user:
    'bank_name'                 => 'Banco',
    'bank_balance'              => 'Saldo',
    'savings_balance'           => 'Salgo de ahorro',
    'credit_card_limit'         => 'Límite de la tarjeta de crédito',
    'automatch'                 => 'Coinciden automáticamente',
    'skip'                      => 'Saltar',
    'enabled'                   => 'Habilitado',
    'name'                      => 'Nombre',
    'active'                    => 'Activo',
    'amount_min'                => 'Importe mínimo',
    'amount_max'                => 'Importe máximo',
    'match'                     => 'Encuentros en',
    'strict'                    => 'Modo estricto',
    'repeat_freq'               => 'Repetición',
    'location'                  => 'Ubicación',
    'update_channel'            => 'Canal de actualizaciones',
    'journal_currency_id'       => 'Divisa',
    'currency_id'               => 'Divisa',
    'transaction_currency_id'   => 'Moneda',
    'auto_budget_currency_id'   => 'Currency',
    'external_ip'               => 'IP externa de su servidor',
    'attachments'               => 'Adjuntos',
    'journal_amount'            => 'Importe',
    'journal_source_name'       => 'Cuenta de ingresos (origen)',
    'keep_bill_id'              => 'Factura',
    'journal_source_id'         => 'Cuenta de activos (origen)',
    'BIC'                       => 'BIC',
    'verify_password'           => 'Verificar la seguridad de contraseña',
    'source_account'            => 'Cuenta origen',
    'destination_account'       => 'Cuenta destino',
    'journal_destination_id'    => 'Cuenta de activos (destino)',
    'asset_destination_account' => 'Cuenta de destino',
    'include_net_worth'         => 'Incluir en valor neto',
    'asset_source_account'      => 'Cuenta de origen',
    'journal_description'       => 'Descripción',
    'note'                      => 'Notas',
    'store_new_transaction'       => 'Guardar nueva transacción',
    'split_journal'               => 'Dividir esta transacción',
    'split_journal_explanation'   => 'Dividir esta transacción en múltiples partes',
    'currency'                    => 'Divisa',
    'account_id'                  => 'Cuenta',
    'budget_id'                   => 'Presupuesto',
    'opening_balance'             => 'Saldo inicial',
    'tagMode'                     => 'Modo de etiqueta',
    'tag_position'                => 'Etiquetar ubicación',
    'virtual_balance'             => 'Saldo virtual',
    'targetamount'                => 'Cantidad objetivo',
    'account_role'                => 'Rol de cuenta',
    'opening_balance_date'        => 'Fecha del saldo inicial',
    'cc_type'                     => 'Plan de pagos con tarjeta de crédito',
    'cc_monthly_payment_date'     => 'Fecha de pago mensual de la tarjeta de crédito',
    'piggy_bank_id'               => 'Hucha',
    'returnHere'                  => 'Volver aquí',
    'returnHereExplanation'       => 'Después de guardar, vuelve aquí para crear otro.',
    'returnHereUpdateExplanation' => 'Después de actualizar, vuelve aquí.',
    'description'                 => 'Descripción',
    'expense_account'             => 'Cuenta de gastos',
    'revenue_account'             => 'Cuenta de ingresos',
    'decimal_places'              => 'Lugares decimales',
    'exchange_rate_instruction'   => 'Monedas extranjeras',
    'source_amount'               => 'Importe (origen)',
    'destination_amount'          => 'Importe (destino)',
    'native_amount'               => 'Cantidad nativa',
    'new_email_address'           => 'Nueva dirección de email',
    'verification'                => 'Verificación',
    'api_key'                     => 'Clave de API',
    'remember_me'                 => 'Recordarme',
    'liability_type_id'           => 'Tipo de pasivo',
    'interest'                    => 'Interés',
    'interest_period'             => 'Período de interés',

    'source_account_asset'        => 'Cuenta de origen (cuenta de activos)',
    'destination_account_expense' => 'Cuenta de destino (cuenta de gastos)',
    'destination_account_asset'   => 'Cuenta de destino (cuenta de activos)',
    'source_account_revenue'      => 'Cuenta de origen (cuenta de ingresos)',
    'type'                        => 'Tipo',
    'convert_Withdrawal'          => 'Convertir extracción',
    'convert_Deposit'             => 'Convertir depósito',
    'convert_Transfer'            => 'Convertir transferencia',

    'amount'                      => 'Importe',
    'foreign_amount'              => 'Cantidad extranjera',
    'existing_attachments'        => 'Adjuntos existentes',
    'date'                        => 'Fecha',
    'interest_date'               => 'Fecha de interés',
    'book_date'                   => 'Fecha de registro',
    'process_date'                => 'Fecha de procesamiento',
    'category'                    => 'Categoría',
    'tags'                        => 'Etiquetas',
    'deletePermanently'           => 'Borrar permanentemente',
    'cancel'                      => 'Cancelar',
    'targetdate'                  => 'Fecha límite',
    'startdate'                   => 'Fecha de inicio',
    'tag'                         => 'Etiqueta',
    'under'                       => 'Debajo',
    'symbol'                      => 'Símbolo',
    'code'                        => 'Código',
    'iban'                        => 'IBAN',
    'account_number'              => 'Número de cuenta',
    'creditCardNumber'            => 'Número de la tarjeta de crédito',
    'has_headers'                 => 'Encabezados',
    'date_format'                 => 'Formato de fecha',
    'specifix'                    => 'Banco- o archivo de soluciones especificas',
    'attachments[]'               => 'Adjuntos',
    'store_new_withdrawal'        => 'Guardar nuevo retiro',
    'store_new_deposit'           => 'Guardar nuevo depósito',
    'store_new_transfer'          => 'Guardar nueva transferencia',
    'add_new_withdrawal'          => 'Añadir un nuevo retiro',
    'add_new_deposit'             => 'Añadir nuevo depósito',
    'add_new_transfer'            => 'Añadir nueva transferencia',
    'title'                       => 'Título',
    'notes'                       => 'Notas',
    'filename'                    => 'Nombre de fichero',
    'mime'                        => 'Tipo Mime',
    'size'                        => 'Tamaño',
    'trigger'                     => 'Disparador',
    'stop_processing'             => 'Detener el procesamiento',
    'start_date'                  => 'Inicio del rango',
    'end_date'                    => 'Final del rango',
    'include_attachments'         => 'Incluir archivos adjuntos subidos',
    'include_old_uploads'         => 'Incluir datos importados',
    'delete_account'              => 'Borrar cuenta ":name"',
    'delete_bill'                 => 'Eliminar factura ":name"',
    'delete_budget'               => 'Eliminar presupuesto ":name"',
    'delete_category'             => 'Eliminar categoría ":name"',
    'delete_currency'             => 'Eliminar divisa ":name"',
    'delete_journal'              => 'Eliminar la transacción con descripción ":description"',
    'delete_attachment'           => 'Eliminar adjunto ":name"',
    'delete_rule'                 => 'Eliminar regla ":title"',
    'delete_rule_group'           => 'Eliminar grupo de reglas ":title"',
    'delete_link_type'            => 'Eliminar tipo de enlace ":name"',
    'delete_user'                 => 'Eliminar usuario ":email"',
    'delete_recurring'            => 'Eliminar transacción recurrente ":title"',
    'user_areYouSure'             => 'Si elimina usuario ":email", todo desaparecerá. No hay deshacer, recuperar ni nada. Si te eliminas, perderás el acceso a esta instancia de Firefly III.',
    'attachment_areYouSure'       => '¿Seguro que quieres eliminar el archivo adjunto llamado "name"?',
    'account_areYouSure'          => '¿Seguro que quieres eliminar la cuenta llamada ":name"?',
    'bill_areYouSure'             => '¿Seguro que quieres eliminar la factura llamada ":name"?',
    'rule_areYouSure'             => '¿Seguro que quieres eliminar la regla titulada ":title"?',
    'ruleGroup_areYouSure'        => '¿Seguro que quieres eliminar el grupo de reglas titulado ":title"?',
    'budget_areYouSure'           => '¿Seguro que quieres eliminar el presupuesto llamado ":name"?',
    'category_areYouSure'         => '¿Seguro que quieres eliminar la categoría llamada ":name"?',
    'recurring_areYouSure'        => '¿Está seguro de que desea eliminar la transacción recurrente ":title"?',
    'currency_areYouSure'         => '¿Está seguro que desea eliminar la moneda denominada ":name"?',
    'piggyBank_areYouSure'        => '¿Está seguro que desea eliminar la hucha llamada ":name"?',
    'journal_areYouSure'          => '¿Estás seguro de que deseas eliminar la transacción descrita ":description"?',
    'mass_journal_are_you_sure'   => '¿Usted esta seguro de querer eliminar estas transacciones?',
    'tag_areYouSure'              => '¿Seguro que quieres eliminar la etiqueta ":tag"?',
    'journal_link_areYouSure'     => '¿Seguro que quieres eliminar el vínculo entre <a href=":source_link">:source</a> y <a href=":destination_link">:destination</a>?',
    'linkType_areYouSure'         => '¿Estás seguro de que deseas eliminar el tipo de vínculo ":name" (":inward" / ":outward")?',
    'permDeleteWarning'           => 'Eliminar cosas de Firefly III es permanente y no se puede deshacer.',
    'mass_make_selection'         => 'Aún puede evitar que se eliminen elementos quitando la casilla de verificación.',
    'delete_all_permanently'      => 'Eliminar selección permanentemente',
    'update_all_journals'         => 'Actualiza estas transacciones',
    'also_delete_transactions'    => 'La única transacción conectada a esta cuenta también se eliminará. | Todas las :count transacciones conectadas a esta cuenta también se eliminarán.',
    'also_delete_connections'     => 'La única transacción vinculada con este tipo de enlace perderá esta conexión. | Todas las :count transacciones vinculadas con este tipo de enlace perderán su conexión.',
    'also_delete_rules'           => 'La única regla conectada a este grupo de reglas también se eliminará. | Todas las :count reglas conectadas a este grupo de reglas también se eliminarán.',
    'also_delete_piggyBanks'      => 'La hucha conectada a esta cuenta también se eliminará.|Las :count huchas conectadas a esta cuenta también se eliminarán.',
    'bill_keep_transactions'      => 'La transacción conectada a esta factura no será eliminada.|Las :count transacciones conectadas a esta factura serán eliminadas.',
    'budget_keep_transactions'    => 'La transacción conectada a este presupuesto no se eliminará.|Las :count transacciones conectadas a este presupuesto no serán eliminadas.',
    'category_keep_transactions'  => 'La transacción conectada a esta categoría no se eliminará.|Las :count transacciones conectadas a esta categoría no serán eliminadas.',
    'recurring_keep_transactions' => 'La transacción conectada a esta transacción recurrente no se eliminará.|Las :count transacciones conectadas a esta transacción recurrente no serán eliminadas.',
    'tag_keep_transactions'       => 'La transacción conectada a esta etiqueta no se eliminará.|Las :count transacciones conectadas a esta etiqueta no serán eliminadas.',
    'check_for_updates'           => 'Ver actualizaciones',

    'email'                 => 'Correo electrónico',
    'password'              => 'Contraseña',
    'password_confirmation' => 'Contraseña (otra vez)',
    'blocked'               => '¿Está bloqueado?',
    'blocked_code'          => 'Razón del bloqueo',
    'login_name'            => 'Iniciar sesión',

    // import
    'apply_rules'           => 'Aplicar reglas',
    'artist'                => 'Artista',
    'album'                 => 'Álbum',
    'song'                  => 'Canción',


    // admin
    'domain'                => 'Dominio',
    'single_user_mode'      => 'Deshabilitar registro de usuario',
    'is_demo_site'          => 'Está en modo demostración',

    // import
    'import_file'           => 'Importar archivo',
    'configuration_file'    => 'Archivo de configuración',
    'import_file_type'      => 'Importar tipo de archivo',
    'csv_comma'             => 'Una coma (,)',
    'csv_semicolon'         => 'Un punto y coma (;)',
    'csv_tab'               => 'Un tabulador (invisible)',
    'csv_delimiter'         => 'Delimitador de campo CSV',
    'csv_import_account'    => 'Cuenta de importación predeterminada',
    'csv_config'            => 'Configuración de importación de CSV',
    'client_id'             => 'Identificación del cliente',
    'service_secret'        => 'Servicio secreto',
    'app_secret'            => 'Secreto de aplicación',
    'app_id'                => 'ID de la App',
    'secret'                => 'Secreto',
    'public_key'            => 'Llave pública',
    'country_code'          => 'Código del país',
    'provider_code'         => 'Banco o proveedor de datos',
    'fints_url'             => 'URL de la API de FinTS',
    'fints_port'            => 'Puerto',
    'fints_bank_code'       => 'Código bancario',
    'fints_username'        => 'Usuario',
    'fints_password'        => 'PIN / Contraseña',
    'fints_account'         => 'Cuenta FinTS',
    'local_account'         => 'Cuenta Firefly III',
    'from_date'             => 'Fecha desde',
    'to_date'               => 'Fecha hasta',


    'due_date'                => 'Fecha de vencimiento',
    'payment_date'            => 'Fecha de pago',
    'invoice_date'            => 'Fecha de la factura',
    'internal_reference'      => 'Referencia interna',
    'inward'                  => 'Descripción interna',
    'outward'                 => 'Descripción externa',
    'rule_group_id'           => 'Grupo de reglas',
    'transaction_description' => 'Descripción de la transacción',
    'first_date'              => 'Primera fecha',
    'transaction_type'        => 'Tipo de transacción',
    'repeat_until'            => 'Repetir hasta',
    'recurring_description'   => 'Descripción de transacción recurrente',
    'repetition_type'         => 'Tipo de repetición',
    'foreign_currency_id'     => 'Moneda extranjera',
    'repetition_end'          => 'Termina la repetición',
    'repetitions'             => 'Repeticiones',
    'calendar'                => 'Calendario',
    'weekend'                 => 'Fin de semana',
    'client_secret'           => 'Secreto del cliente',

    'withdrawal_destination_id' => 'Cuenta de destino',
    'deposit_source_id'         => 'Cuenta de origen',
    'expected_on'               => 'Esperado para',
    'paid'                      => 'Pagado',

    'auto_budget_type'            => 'Auto-budget',
    'auto_budget_amount'            => 'Auto-budget amount',
    'auto_budget_period'            => 'Auto-budget period',


];
