<?php
function lang($phrase){
    static $lang = array(
 'DASHBOARD_TITLE'=>'Панель приборов',
 'DASHBOARD_ticket_stats'=>'Статистика заявок',
 'DASHBOARD_ticket_in_desc'=>'Входящие свободные заявки, которые вы можете взять',
 'DASHBOARD_ticket_in'=>'входящие заявки',
 'DASHBOARD_ticket_lock'=>'заблокировано мной',
 'DASHBOARD_ticket_lock_desc'=>'Заявки, с которыми Вы работаете',
 'DASHBOARD_ticket_out'=>'исходящие заявки',
 'DASHBOARD_ticket_out_desc'=>'Заявки, созданные Вами и остались не выполненными',
 'DASHBOARD_last_news'=>'Последние изменения',
 'DASHBOARD_last_help'=>'Последнее из Центра Знаний',
 'DASHBOARD_author'=>'Автор',
 'DASHBOARD_last_in'=>'Последние входящие заявки',
 'NEW_title'=>'Создание новой заявки',
 'NEW_ok'=>'Заявка успешно создана!',
 'NEW_ok_1'=>'Вы можете',
 'NEW_ok_2'=>'поделиться ссылкой',
 'NEW_ok_3'=>'на заявку',
 'NEW_from'=>'От кого',
 'NEW_from_desc'=>'ФИО или логин пользователя, который обратился за помощью',
 'NEW_fio'=>'ФИО или логин пользователя',
 'NEW_fio_desc'=>'Пожалуйста, заполните это поле',
 'NEW_to'=>'Кому',
 'NEW_to_desc'=>'Исполнитель заявки - или весь отдел , или опционально конкретного сотрудника.',
 'NEW_to_unit'=>'Отдел',
 'NEW_to_unit_desc'=>'Укажите отдел назначения или сотрудника',
 'NEW_to_user'=>'Исполнитель',
 'NEW_prio'=>'Приоритет',
 'NEW_prio_low'=>'Низкий',
 'NEW_prio_norm'=>'Средний',
 'NEW_prio_high'=>'Высокий',
 'NEW_prio_high_desc'=>'Будет задействовано SMS-информирование',
 'NEW_subj'=>'Тема',
 'NEW_subj_msg'=>'Укажите тему заявки',
 'NEW_subj_det'=>'Заголовок заявки',
 'NEW_MSG'=>'Текст',
 'NEW_MSG_msg'=>'Укажите подробно суть заявки',
 'NEW_MSG_ph'=>'Суть заявки',
 'NEW_MSG_ph_1'=>'Если нужно дополните сообщение информацией',
 'NEW_button_create'=>'Создать заявку',
 'NEW_button_reset'=>'Очистить поля',
 'LIST_title'=>'Список заявок',
 'LIST_ok_t'=>'заявка выполнена',
 'LIST_lock_t_i'=>'заявка, с которой Вы работаете',
 'LIST_lock_t'=>'заявка, с которой работают',
 'LIST_lock_n'=>'номер заявки',
 'LIST_find_ph'=>'Введите # или тему заявки',
 'LIST_find_button'=>'Поиск',
 'LIST_in'=>'Входящие',
 'LIST_out'=>'Исходящие',
 'LIST_arch'=>'Архив',
 'LIST_loading'=>'Идет загрузка',
 'CREATE_ACC_success'=>'Ваша учетная запись успешно активирована! <br> На Вашу электронную почту отправлено логин и пароль.',
 'msg_created_new_user' => 'Будет создан новый пользователь',
 'CREATE_ACC_already'=>'Ваша учетная запись уже активирована.',
 'CREATE_ACC_error'=>'Пользователь с таким электронным адресом не найден.',
 'MAIN_TITLE'=>'СИСТЕМА ЗАЯВОК',
 'AUTH_USER'=>'Авторизация пользователя',
 'login'=>'Логин',
 'pass'=>'Пароль',
 'remember_me'=>'Запомнить меня',
 'error_auth'=>'Ошибка авторизации. <br> Проверьте логин и пароль.',
 'first_in_auth'=>'Первый вход и активация',
'user_auth'=>'Активация пользователя',
'work_mail'=>'Ваш рабочий e-mail',
'action_auth'=>'Активировать',
'log_in'=>'Войти',
'work_mail_ph'=>'Укажите Вашу рабочую электронную почту (e-mail).',
'NOTES_single'=>'Запись...',
't_LIST_prio'=>'Приоритет',
't_LIST_subj'=>'Тема',
// <? = lang ('t_LIST_prio');
't_LIST_worker'=>'Пользователь',
't_LIST_create'=>'Создан',
't_LIST_ago'=>'Прошло',
't_LIST_init'=>'Автор',
't_LIST_to'=>'Исполнитель',
't_LIST_status'=>'Статус',
't_LIST_action'=>'Действие',

't_list_a_nook'=>'отметить, как выполненное',
't_list_a_unlock'=>'разблокировать',
't_list_a_lock'=>'заблокировать',
't_list_a_ok'=>'выполнить',
't_list_a_all'=>'Всем',
't_list_a_user_ok'=>'Выполнил',
't_list_a_date_ok'=>'Выполнено',
't_list_a_p_norm'=>'Средний приоритет',
't_list_a_p_low'=>'Низкий приоритет',
't_list_a_p_high'=>'Высокий приоритет',
't_list_a_oko'=>'выполнено',
't_list_a_arch'=>'в архиве',
't_list_a_lock_i'=>'работаю я',
't_list_a_lock_u'=>'работает',
't_list_a_hold'=>'ожидания действия',
't_list_a_ok_no'=>'Выполнено / не выполнено',

'HELP_desc'=>'Описание проблемы',
'HELP_do'=>'Решение',
'HELP_save'=>'Сохранить',
'HELP_back'=>'Назад',
'HELP_all'=>'Все',
'HELP_create'=>'Создать',
'MSG_no_records'=>'Нет записей',
'TICKET_name'=>'Заявка',



'WORKER_TITLE'=>'Информация о пользователе',
'WORKER_fio'=>'ФИО',
'WORKER_login'=>'Логин',
'WORKER_posada'=>'Должность',
'WORKER_unit'=>'Раздел',
'WORKER_tel'=>'Тел',
'WORKER_tel_full'=>'Телефон',
'WORKER_room'=>'Кабинет',
'WORKER_mail'=>'E-mail',
'WORKER_total'=>'Заявок',
'WORKER_last'=>'Последняя',
'WORKER_edit_info'=>'Изменение информации',
'WORKER_send_approve'=>'Отправить запрос на изменение',

'PROFILE_msg_ok'=>'Информация успешно обновлена.',
'PROFILE_msg_error'=>'Имя или e-mail имеют не корректный формат.',
'PROFILE_msg_pass_err'=>'Старый пароль не верен.',
'PROFILE_msg_pass_err2'=>'Новые пароли не совпадают.',
'PROFILE_msg_pass_err3'=>'Пароль должен быть не менее 4 символов.',
'PROFILE_msg_pass_ok'=>'Пароль успешно изменен. Вам нужно <a href=\'index.php\'> зайти заново в систему </a>.',
'PROFILE_msg_te'=>'Ошибка',

'TABLE_name'=>'Название',
'TABLE_action'=>'Действие',
'PROFILE_msg_send'=>'Запрос на изменение информации о пользователе отправлен. Изменения произойдут только после проверки администратором.',

'TICKET_msg_OK'=>'Заявка выполнена',
'TICKET_msg_OK_error'=>'Невозможно выполнение. Заявка уже выполнена пользователем',
'TICKET_msg_unOK'=>'Заявка не выполнена',
'TICKET_msg_unOK_error'=>'Не удается выполнить',
'TICKET_msg_lock'=>'Заявка заблокирована',
'TICKET_msg_lock_error'=>'Невозможно заблокировать заявку. С ней работает ',
'TICKET_msg_unlock'=>'Заявка разблокирована',
'TICKET_msg_refer'=>'Заявка переадресована',
'empty'=>'пусто',
't_list_a_top'=>'ТОП 10 результатов поиска',


'TICKET_status_arch'=>'заявка в архиве',
'TICKET_status_ok'=>'заявка выполнена пользователем',
'TICKET_status_lock'=>'с заявкой работает',
'TICKET_status_new'=>'новая заявка, ожидание действия',

'TICKET_action_unlock'=>'Восстановить',
'TICKET_action_lock'=>'Заблокировать',
'TICKET_action_ok'=>'Выполнено',
'TICKET_action_nook'=>'Не выполнено',
'TICKET_msg_updated'=>'Заявка была обновлена​​.',

'TICKET_t_from'=>'Автор',
'TICKET_t_was_create'=>'Была создана',
'TICKET_t_to'=>'Исполнитель',
'TICKET_t_last_edit'=>'Редактировалось',
'TICKET_t_worker'=>'Пользователь',
'TICKET_t_last_up'=>'Последнее обновление',
'TICKET_t_status'=>'Статус',
'TICKET_t_prio'=>'Приоритет',
'TICKET_t_subj'=>'Тема',
'TICKET_t_refer'=>'Переадресация',
'TICKET_t_refer_to'=>'Переадресация на',
'TICKET_t_opt'=>'опционально',
'TICKET_t_in_arch'=>'Заявка находится в архиве.',
'TICKET_t_ok'=>'Заявка успешно выполнена пользователем',
'TICKET_t_ok_1'=>'Через некоторое время заявка перейдет в архив.',
'TICKET_t_lock'=>'В настоящее время с заявкой работает пользователь',
'TICKET_t_lock_1'=>'Поэтому Вы не можете работать с заявкой.',
'TICKET_t_lock_i'=>'В настоящее время Вы работаете с заявкой. Для того, чтобы другие могли работать, разблокируйте ее.',
'TICKET_t_comment'=>'Комментарии',
'TICKET_t_history'=>'История изменений',
'TICKET_t_your_comment'=>'Ваш комментарий',
'TICKET_t_det_ticket'=>'Укажите подробно суть заявки',
'TICKET_t_comm_ph'=>'Комментарий к заявке',
'TICKET_t_send'=>'Отправить',
'TICKET_t_date'=>'Дата',
'TICKET_t_init'=>'Автор',
'TICKET_t_action'=>'Действие',
'TICKET_t_desc'=>'Описание',
'TICKET_t_a_refer'=>'заявка переадресована на',
'TICKET_t_a_arch'=>'заявка перенесена в архив',
'TICKET_t_a_ok'=>'заявка отмечена как выполнена',
'TICKET_t_a_nook'=>'заявка отмечена как не выполнена',
'TICKET_t_a_lock'=>'заявка заблокирована',
'TICKET_t_a_unlock'=>'заявка разблокирована',
'TICKET_t_a_create'=>'заявка была создана',
'TICKET_t_a_e_text'=>'в заявке было изменено сообщение',
'TICKET_t_a_e_subj'=>'в заявке была изменена тема',
'TICKET_t_a_com'=>'заявка была прокомментирована',
'TICKET_t_no'=>'Нет такой заявки',

'CLIENTS_name'=>'Пользователи',
'CLIENTS_find'=>'Найти',
'CLIENTS_find_me'=>'Воспользуйтесь поиском для редактирования информации...',


'NAVBAR_tickets'=>'Заявки',
'NAVBAR_create_ticket'=>'Создать заявку',
'NAVBAR_list_ticket'=>'Список заявок',
'NAVBAR_workers'=>'Пользователи',
'NAVBAR_helper'=>'Центр знаний',
'NAVBAR_notes'=>'Блокнот',
'NAVBAR_admin'=>'Администрирование',
'NAVBAR_users'=>'Пользователи системы',
'NAVBAR_deps'=>'Отделы',
'NAVBAR_approve'=>'Подтверждение',
'NAVBAR_all_tickets'=>'Все заявки',
'NAVBAR_reports'=>'Отчеты',
'NAVBAR_db'=>'Справочники',
'NAVBAR_posads'=>'Должности',
'NAVBAR_units'=>'Управление',
'NAVBAR_subjs'=>'Темы заявок',
'NAVBAR_profile'=>'Профиль',
'NAVBAR_help'=>'Помощь',
'NAVBAR_logout'=>'Выйти',



'TICKET_ACTION_refer'=>'переадресована пользователем',
'TICKET_ACTION_refer_to'=>'на',
'TICKET_ACTION_ok'=>'выполнена пользователем',
'TICKET_ACTION_nook'=>'не выполнена пользователем',
'TICKET_ACTION_lock'=>'заблокирована пользователем',
'TICKET_ACTION_unlock'=>'разблокирована пользователем',
'TICKET_ACTION_create'=>'создана пользователем',
'TICKET_ACTION_edit'=>'изменено пользователем',
'TICKET_ACTION_comment'=>'прокомментировано пользователем',
'TICKET_ACTION_arch'=>'заявка перенесена в архив',


'HELPER_title'=>'Центр знаний',
'HELPER_back'=>'назад',
'HELPER_pub'=>'Опубликовал',
'HELPER_date'=>'Дата',
'HELPER_find'=>'Найти',
'HELPER_create'=>'создать новую запись',
'HELPER_desc'=>'Описание проблемы или вопросы...',


'NOTES_title'=>'Персональный блокнот',
'NOTES_link'=>'Ссылка на запись',
'NOTES_create'=>'создать новую запись',
'NOTES_cr'=>'Добавление нового или выберите...',


'P_title'=>'Редактирование информации',
'P_main'=>'Общая информация',
'P_login'=>'Логин',
'P_mail'=>'E-mail',
'P_mail_desc'=>'Используется исключительно для оповещения.',
'P_edit'=>'Редактировать',
'P_passedit'=>'Изменение пароля',
'P_pass_old'=>'Старый пароль',
'P_pass_old2'=>'Пароль старый',
'P_pass_new'=>'Новый пароль',
'P_pass_new2'=>'Пароль новый',
'P_pass_new_re'=>'Повторите новый пароль',
'P_pass_new_re2'=>'Пароль новый (повторно )',
'P_do_edit_pass'=>'Изменить пароль',

'JS_not_found'=>'Не найдено...',
'JS_ticket'=>'Заявка',
'JS_up'=>'Обновлено!',
'JS_save'=>'Сохранить',
'JS_pub'=>'Поделиться',
'JS_del'=>'Действительно хотите удалить?',
'JS_create'=>'Добавление новой или выберите...',
'JS_low'=>'Низкий',
'JS_norm'=>'Средний',
'JS_high'=>'Высокий',
'JS_unit'=>'Пожалуйста, заполните поле подразделение',
'JS_probl'=>'Пожалуйста, заполните поле описание проблемы',
'JS_ok'=>'Выполнено',
'JS_no_ok'=>'Не выполнено',
'JS_unlock'=>'Восстановить',
'JS_lock'=>'Заблокировать',


'USERS_title'=>'Пользователи',
'USERS_create'=>'Создать пользователя',
'USERS_list'=>'Пользователи',

'USERS_msg_add'=>'Пользователь успешно добавлен!',
'USERS_new'=>'Новый пользователь',
'USERS_fio'=>'ФИО',
'USERS_fio_full'=>'фамилии, имя и отчество',
'USERS_login'=>'Логин',
'USERS_pass'=>'Пароль',
'USERS_mail'=>'E-mail',
'USERS_units'=>'Отделы',
'USERS_unit'=>'Отдел',
'USERS_nach1'=>'Начальник управления',
'USERS_nach1_desc'=>'Будет видеть все заявки.',
'USERS_nach'=>'Начальник отдела',
'USERS_nach_desc'=>'Будет видеть все заявки, адресованные в выбранные отделы, а также адресованые всем пользователям отдела.',
'USERS_wo'=>'Сотрудник',
'USERS_wo_desc'=>'Будет видеть все заявки, адресованные в отдел и пользователю. Заявки другим пользователям отдела будет не видно.',
'USERS_make_create'=>'Создать пользователя',

'USERS_uid'=>'UID',
'USERS_privs'=>'Привилегии',
'USERS_p_1'=>'Нач. отдела',
'USERS_p_2'=>'Сотрудник',
'USERS_p_3'=>'Нач. управления',
'USERS_msg_edit_ok'=>'Данные пользователя успешно отредактированы!',
'USERS_make_edit'=>'Редактировать данные пользователя',
'USERS_acc'=>'Аккаунт',
'USERS_not_active'=>'Выключен',
'USERS_active'=>'Включен',
'USERS_editable'=>'Редактировать данные пользователя',

'DEPS_title'=>'Отделы',
'DEPS_name'=>'Название отдела',
'DEPS_add'=>'Добавить',
'DEPS_n'=>'Название',
'DEPS_action'=>'Действие',


'APPROVE_title'=>'Подтверждение изменения информации',
'APPROVE_info'=>'Информация',
'APPROVE_fio'=>'ФИО',
'APPROVE_login'=>'Логин',
'APPROVE_posada'=>'Должность',
'APPROVE_unit'=>'Раздел',
'APPROVE_tel'=>'Тел',
'APPROVE_adr'=>'Адрес',
'APPROVE_mail'=>'E-mail',
'APPROVE_app'=>'Подтвердить?',
'APPROVE_orig'=>'Оригинал',
'APPROVE_yes'=>'Да',
'APPROVE_no'=>'Нет',
'APPROVE_want'=>'хочет изменить на',


'POSADA_title'=>'Должности',
'POSADA_name'=>'Название должности',
'POSADA_add'=>'Добавить',
'POSADA_n'=>'Название',
'POSADA_action'=>'Действие',


'UNITS_title'=>'Управление системы',
'UNITS_name'=>'Название управления',
'UNITS_add'=>'Добавить',
'UNITS_n'=>'Название',
'UNITS_action'=>'Действие',


'SUBJ_title'=>'Темы заявок',
'SUBJ_name'=>'Название темы',
'SUBJ_add'=>'Добавить',
'SUBJ_n'=>'Название',
'SUBJ_action'=>'Действие',


'STATS_TITLE'=>'Статистика пользователя',
'STATS_in'=>'Входящие заявки',
'STATS_out'=>'Исходящие заявки',
'STATS_new'=>'Новые',
'STATS_lock'=>'С которыми работаю',
'STATS_ok'=>'Выполнено мной',
'STATS_nook'=>'Не выполненные',
'STATS_create'=>'Создано мной',
'STATS_lock_o'=>'Работают',
'STATS_ok_o'=>'Выполнено',
'STATS_help1'=>'<li> новые - заявки , которые адресованы Вам или Вашему отделу и Вы можете их выполнить. </li > <li> Заблокированные - заявки, над которыми Вы работаете. </li > <li> Выполненные - заявки, которые Вы уже выполнили (через некоторое время перейдут в архив и исчезнут по графику) </li >',
'STATS_help2'=>'<li> Не выполненные - заявки, которые вы создали, но их еще никто не выполнил. </li > <li> Заблокированные - заявки, над которыми кто-то работает. </li > <li> Выполненные - заявки, которые Вы создали и их выполнили </li >',
'STATS_in_now'=>'Входящие заявки в настоящее время',
'STATS_t'=>'Заявок',
'STATS_t_ok'=>'Выполненные',
'STATS_t_free'=>'Свободные',
'STATS_out_all'=>'Исходящие заявки за весь период',
'STATS_t_lock'=>'С которыми работают',



'DASHBOARD_def_msg'=>', приветствуем Вас в системе заявок! </strong> </center> <br> Рекомендуем Вам посмотреть <a href=\'help\' class=\'alert-link\'> </i> инструкции </a> по работе с системой. <br> Или <a href=\'create\'class=\'alert-link\'> создайте новую заявку </a> прямо сейчас!',

'msg_creted_new_user' => 'Будет заведен новый пользователь.',


'MAIL_active' => 'Учетная запись активирована',
'MAIL_adr' => 'Адрес',
'MAIL_active_u' => 'Учетная запись пользователя активирована',
'MAIL_cong' => 'Приветствуем Вас в системе заявок',
'MAIL_data' => 'Данные',
'MAIL_name' => 'Система заявок',
'MAIL_new' => 'НОВАЯ ЗАЯВКА',
'MAIL_code' => 'Код заявки',
'MAIL_2link' => 'Перейти на страницу заявки',
'MAIL_info' => 'Информация',
'MAIL_created' => 'Заявку создал',
'MAIL_to' => 'Кому',
'MAIL_prio' => 'Приоритет',
'MAIL_worker' => 'Сотрудник',
'MAIL_msg' => 'Сообщение',
'MAIL_subj' => 'Тема',
'MAIL_text' => 'Текст',
't_LIST_worker_to' => 'сотруднику',
't_LIST_person' => 'персонально',

'HELP_title' => 'Инструкция по работе с заявками',
'HELP_new' => 'Создание заявки',
'HELP_review' => 'Просмотр заявки',
'HELP_edit_user' => 'Изменение информации о пользователе',
'HELP_new_text' => '<p>Для создания заявки, Вам необходимо заполнить обязательные поля.
                                </p>
                                <ol>
                                    <li><strong>От кого</strong> - Вам необходимо начать набирать часть фамилии, имя, отчество или логин. Если такой работник уже есть в системе, то Вам автоматически будет предложено выбрать его из Списка. Если его нет - то он будет создан. В правой части страницы Вы можете дополнительно указать контактную информацию о работнике. Как правило это контактный телефон, адрес.</li>
                                    <li><strong>Кому</strong> - указывается отдел. Обязательно указать отдел, а также опционально исполнителя. Если указать только отдел, то заявку увидят все сотрудники отдела. Если указать еще и исполнителя, то заявку увидит лишь исполнитель а также начальник его отдела.</li>
                                    <li><strong>Приоритет</strong> - указывается приоритет выполнения заявки. В общем списке заявки его можно увидеть определенными пометками.</li>
                                    <li><strong>Тема</strong> - указывается кратко тема заявки.</li>
                                    <li><strong>Сообщение</strong> - указывается подробно суть заявки.</li>
                                </ol>',
'HELP_review_text' => '<p>Вам доступны три "каталога": "Входящие", "Исходящие", "Архив". Подробно о них ниже.
                                </p>
                                <ul>
                                    <li><strong>Входящие</strong> - в этом каталоге содержатся все заявки, адресованые Вам непосредственно или Вашему отделу.
При наличии прав пользователя - вы видите только заявки адресованые всему отделу или Вам непосредственно. (заявки адресованы Вам и отделу).
При наличии прав начальника отдела - вы видите все заявки Вашего отдела (адресованные Вам, пользователям, и отделу).
                                    </li>
                                    <li><strong>Исходящие</strong> - в этом каталоге содержатся все заявки которые создавали Вы. Вы можете просматривать статус Ваших создаваемых заявок.
                                    </li>
                                    <li><strong>Архив</strong> - в этом каталоге содержатся все заявки которые были выполнены, и через некоторое время перешли в архив. Они отправляются в архив автоматически.
                                    </li>
                                </ul>
                                <p>
                                    В списке заявки имеют разные цвета, для того, чтобы видеть их статус. Если заявка черного цветом - то она не прочитана. Синего - ожидает действия. Желтого - блокирована Вами. Серого - блокирована пользователем. Зеленого - заявка выполнена.
                                </p>
                                <center>
                                
                                </center>
                                <p>
                                    <strong>Как только Вы или Ваш отдел получили новую заявку</strong>, Вам необходимо просмотреть ее, нажав на тему и принять решение:
                                <ul>
                                    <li><strong>Переадресовать на другой отдел / или пользователя</strong> - Если заявка не в Вашей компетенции, то вы можете перевести заявку на другой отдел или пользователя.
                                    </li>
                                    <li><strong>Заблокировать ее</strong> - для того чтобы все видели, что Вы работаете в данное время с заявкой, и другие пользователи не смогли ничего делать с заявкой кроме начальника отдела.
                                    <li><strong>Выполнить ее</strong> - значит заявку выполнили и через некоторое время она попадет в архив</li>

                                        </ul>
                                    </li>
                                </ul>
                                </p>
                                <p>
                                    Также вы можете оставить комментарий к заявке.
                                </p>',
'HELP_edit_user_text' => '<p>Иногда возникает необходимость дополнить информацию о пользователе или изменить ее.
Для этого существует раздел - Пользователи. Найдите того пользователя, который вам нужен и измените данные. После чего, они пройдут проверку администратором системы и изменятся.
                                </p>',
'REFER_comment_add'=>'дополнил',
'TICKET_file_upload'=>'выбрать файл',
'TICKET_file_upload_msg'=>'Вы можете перенести файлы сюда',
'TICKET_file_add'=>'Добавить файл',
'TICKET_file_list'=>'Прикреплённые файлы',
'SYSTEM_lang'=>'Язык',
''=>''

            );
    return isset($lang[$phrase]) ? $lang[$phrase] : 'undefined';
}
?>
