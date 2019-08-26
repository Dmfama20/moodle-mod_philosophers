<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * German strings for philosophers
 *
 * @package    mod_philosophers
 * @copyright  2019 Benedikt Kulmann <b@kulmann.biz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/* system */
$string['modulename'] = 'Quiz der Weisen';
$string['modulenameplural'] = '»Quiz der Weisen« Instanzen';
$string['modulename_help'] = 'Ein Quiz-Spiel, in dem Fragen aus Kategorien nach Schnelligkeit der Antwort bepunktet werden. Die Kursteilnehmer können mit Hilfe ihrer erreichten Punkte in eine Bestenliste sortiert werden.';
$string['pluginadministration'] = 'Quiz der Weisen« Administration';
$string['pluginname'] = 'Quiz der Weisen';
$string['philosophers'] = 'Quiz der Weisen';
$string['philosophers:addinstance'] = '»Quiz der Weisen« hinzufügen';
$string['philosophers:submit'] = '»Quiz der Weisen« speichern';
$string['philosophers:manage'] = '»Quiz der Weisen« verwalten';
$string['philosophers:view'] = '»Quiz der Weisen« anzeigen';
$string['philosophersname'] = 'Name';
$string['philosophersname_help'] = 'Bitte vergeben Sie einen Namen für dieses »Quiz der Weisen«.';
$string['introduction'] = 'Beschreibung';
$string['route_not_found'] = 'Die aufgerufene Seite gibt es nicht.';

/* main admin form: game options */
$string['game_options_fieldset'] = 'Spieloptionen';
$string['question_duration'] = 'Antwortzeit (Sekunden)';
$string['question_duration_help'] = 'Antwortzeit pro Frage (in Sekunden). Dies sind gleichzeitig die maximal erreichbaren Punkte pro Frage.';
$string['question_reading_speed'] = 'Lese-Geschwindigkeit';
$string['question_reading_speed_help'] = 'Hier kann aus den verfügbaren Lese-Geschwindigkeiten eine ausgewählt werden, die dem Anforderungsniveau der Teilnehmer durchschnittlich am besten entspricht. Die zur Verfügung gestellte Lesezeit im Quiz wird hiermit verlängert oder verkürzt.';
$string['question_reading_speed_-1'] = 'Langsamer (x0,5)';
$string['question_reading_speed_0'] = 'Normal';
$string['question_reading_speed_1'] = 'Schneller (x1,5)';
$string['review_duration'] = 'Anzeigedauer Lösung (Sekunden)';
$string['review_duration_help'] = 'Anzeigezeit der Lösung (in Sekunden), bevor automatisch zur Level-Übersicht weitergeleitet wird.';
$string['shuffle_levels'] = 'Level-Reihenfolge mischen';
$string['shuffle_levels_help'] = 'Wenn aktiviert, werden die Levels in der Übersicht nicht in der konfigurierten, sondern in einer vermischten Reihenfolge angezeigt.';
$string['question_shuffle_answers'] = 'Antworten mischen';
$string['question_shuffle_answers_help'] = 'Wenn diese Option aktiviert ist, werden die Antworten der Fragen gemischt bevor sie angezeigt werden.';
$string['highscore_count'] = 'Länge der Highscore-Liste';
$string['highscore_count_help'] = 'Hier kann die Anzahl der Einträge definiert werden, die in der Highscore-Tabelle nach einem abgeschlossenen Spiel angezeigt wird (Standard: 5). Wenn Sie 0 eingeben, werden nach einem abgeschlossenen Spiel keine Highscores gezeigt.';
$string['completionrounds'] = 'Teilnehmer/in muss Anzahl Runden spielen';
$string['completionroundslabel'] = 'Gespielte Runden';
$string['completionpoints'] = 'Teilnehmer/in muss einen bestimmten Highscore erreichen';
$string['completionpointslabel'] = 'Erreichter Highscore';
$string['highscore_mode'] = 'Highscore-Modus';
$string['highscore_mode_best'] = 'Beste Gewinnstufe';
$string['highscore_mode_last'] = 'Neueste Gewinnstufe';
$string['highscore_mode_average'] = 'Durchschnittliche Gewinnstufe';
$string['highscore_mode_help'] = 'Bitte wählen Sie den Bewertungs-Modus, wie Ergebnisse in die Bestenliste einfließen sollen.';
$string['highscore_teachers'] = 'Dozenten in Highscore Liste?';
$string['highscore_teachers_help'] = 'Wenn diese Option aktiviert ist, werden die Spiel-Ergebnisse der Dozenten mit in der Highscore Liste angezeigt.';

/* activity edit page: control */
$string['control_edit'] = 'Steuerung';
$string['control_edit_title'] = 'Steuerungs Optionen';
$string['reset_progress_heading'] = 'Fortschritt zurücksetzen';
$string['reset_progress_button'] = 'Fortschritt zurücksetzen';
$string['reset_progress_confirm_title'] = 'Bestätigung Fortschritt zurücksetzen';
$string['reset_progress_confirm_question'] = 'Möchten Sie wirklich den Fortschritt zurücksetzen (Highscores etc.)? Dieser Prozess kann nicht rückgängig gemacht werden.';

/* course reset */
$string['course_reset_include_progress'] = 'Fortschritt zurücksetzen (Highscores etc.)';
$string['course_reset_include_topics'] = 'Eingestellte Themen etc. zurücksetzen (Alles wird gelöscht!)';

/* admin screen in vue app */
$string['admin_screen_title'] = 'Spiel-Inhalte bearbeiten';
$string['admin_not_allowed'] = 'Sie haben nicht die nötigen Zugriffsrechte, um diese Seite zu betrachten.';
$string['admin_levels_title'] = 'Levels bearbeiten';
$string['admin_levels_none'] = 'Sie haben noch keine Levels angelegt.';
$string['admin_levels_intro'] = 'Sie haben die folgenden Levels für dieses Spiel angelegt. Sie können hier die Daten und Reihenfolge der Levels verändern, oder Levels löschen. Bitte beachten Sie, dass Sie damit bei einem Spiel, das bereits Teilnehmer hat, die Rangliste wertlos machen könnten.';
$string['admin_btn_save'] = 'Speichern';
$string['admin_btn_cancel'] = 'Abbrechen';
$string['admin_btn_add'] = 'Hinzufügen';
$string['admin_btn_confirm_delete'] = 'Wirklich Löschen';
$string['admin_level_delete_confirm'] = 'Möchten Sie das Level »{$a}« wirklich löschen?';
$string['admin_level_title_add'] = 'Level {$a} erstellen';
$string['admin_level_title_edit'] = 'Level {$a} bearbeiten';
$string['admin_level_loading'] = 'Lade Level-Daten';
$string['admin_level_lbl_name'] = 'Name';
$string['admin_level_lbl_color'] = 'Hintergrund-Farbe';
$string['admin_level_lbl_color_help'] = 'HEX-Format, mit oder ohne #, im 3er oder 6er Format. Beispiel: #cc0033 oder #c03';
$string['admin_level_lbl_image'] = 'Hintergrund-Bild';
$string['admin_level_lbl_categories'] = 'Fragen-Zuweisungen';
$string['admin_level_lbl_category'] = 'Kategorie {$a}';
$string['admin_level_lbl_category_please_select'] = 'Kategorie auswählen';
$string['admin_level_msg_saving'] = 'Das Level wird gespeichert, bitte warten';

/* game screen in vue app */
$string['game_screen_title'] = 'Spiele »Quiz der Weisen«';
$string['game_qtype_not_supported'] = 'Der Fragentyp »{$a}« wird nicht unterstützt.';
$string['game_loading_question'] = 'Frage wird geladen';
$string['game_loading_stats'] = 'Bestenliste wird geladen';
$string['game_loading_stats_failed'] = 'Beim Laden der Bestenliste ist ein Fehler aufgetreten.';
$string['game_btn_restart'] = 'Neues Spiel';
$string['game_btn_continue'] = 'Nächste Frage';
$string['game_btn_stats'] = 'Bestenliste';
$string['game_btn_quit'] = 'Beenden';
$string['game_btn_start'] = 'Spiel Starten';
$string['game_btn_game'] = 'Zum Spiel';
$string['game_over_score'] = 'Sie haben die Gewinnstufe {$a} erreicht';
$string['game_intro_message'] = 'Hier müssen wir noch ein Logo und ggf. Text platzieren.';
$string['game_help_headline'] = 'Spiel-Hinweise';
$string['game_help_message'] = '<ul><li>Mit dem Button »Neues Spiel« kann jederzeit ein neues Spiel gestartet werden.</li><li>Auch im laufenden Spiel kann jederzeit zwischen der Bestenliste und dem Spiel gewechselt werden.</li><li>Das Spiel kann mit dem Button »Beenden« (links unter der Frage) auf der aktuellen Gewinnstufe beendet werden.</li></ul>';
$string['game_stats_empty'] = 'Es gibt noch keine Einträge in der Bestenliste.';
$string['game_stats_rank'] = 'Platz';
$string['game_stats_user'] = 'Nutzer';
$string['game_stats_point'] = '{$a} Punkt';
$string['game_stats_points'] = '{$a} Punkte';
$string['game_stats_score'] = 'Punkte';
$string['game_stats_sessions'] = 'Versuche';
