<?php

class lau {
    function setLang($lang = 0){
        global $lang_1, $message, $sc, $na, $na1, $na2;
        switch($lang){
            case 0: {
                c("tabControl1")->text = "Game
Programs
Scripts
About";
                c("laun_lang")->caption = "Launcher language:";
                if(!$na) c("satp")->caption = "Start SA TP";
                else c("satp")->caption = "Start " . $na;
                if(!$na1) c("txd")->caption = "Start TXD Workshop";
                else c("txd")->caption = "Start " . $na1;
                c("gta_sa")->caption = "Start GTA:SA";
                c("applyB")->hint = "Apply changes";
                c("applyB2")->hint = "Apply changes";
                c("checkbox1")->text = "Load plug-ins [ CLEO load ]";
                c("unofText")->caption = "[ UNOFFICIAL ]  Rockstar North, Rockstar Games
has nothing to do with this program!";
                c("verLabel")->caption = "v" . VER . " | by Emil Dalalyan";
                if(!$na2) c("samp")->caption = "Start SAMP";
                else c("samp")->caption = "Start " . $na2;
                c("combobox1")->text = "English
Russian
French";
                c("buildD")->caption = "Build by ". BUILD;
                c("edc")->caption = "Edit Config";
                c("tabControl2")->text = "Configuration
Manage scripts";
                c("combobox1")->itemIndex = 0;
                c("lscr")->caption = "Aspect ratio:";
                c("applyB4")->caption = "Set aspect ratio";
                c("spb")->caption = "Delete";
                c("rfs")->caption = "Refresh";
                c("spButton1")->caption = "Refresh";
                c("fmProgsEdit->button1")->caption = "Edit";
                c("fmEditButton->button4")->caption = "Cancel";
                c("fmEditButton->label1")->caption = "Icon:";
                c("fmEditButton->label2")->caption = "Execute:";
                c("fmEditButton->label3")->caption = "Name:";

                $message = array( 0 => "Not found executable file! Code: 0xe", 2 => "Select script!", 1 => "You made changes in file, but not save it. Save this file?", 3 => "File failed to save!", 4 => "Select script.",
                5 => "Edit", 6 => "Button", 7 => "Please, select button in list!", 8 => "Start", 9 => "Loaded", 10 => "script (s)", 11 => "Please, restart launcher!", 12 => "Do you want to delete this script?");

                $lang_1 = "eng";

                if( $sc ) c("label3")->caption = $message[9] . " " . $sc . " PHP " . $message[10];

                return true;
            }
            case 1: {
                c("tabControl1")->text = "����
���������
�������
� ���������";
                c("laun_lang")->caption = "���� �������:";
                if(!$na) c("satp")->caption = "������� SA TP";
                else c("satp")->caption = "������� " . $na;
                if(!$na1) c("txd")->caption = "������� TXD Workshop";
                else c("txd")->caption = "������� " . $na1;
                c("gta_sa")->caption = "������� GTA:SA";
                c("applyB")->hint = "��������� ���������";
                c("applyB2")->hint = "��������� ���������";
                c("checkbox1")->text = "��������� ������� [ �������� CLEO ]";
                c("unofText")->caption = "[ �������������� ] Rockstar North, Rockstar Games
�� ����� ��������� � ���� ���������!";
                c("verLabel")->caption = "v" . VER . " | �� ����� ��������";
                if(!$na2) c("samp")->caption = "������� SAMP";
                else c("samp")->caption = "������� " . $na2;
                c("combobox1")->text = "����������
�������
����������";
                c("buildD")->caption = "������ �� " . BUILD;
                c("edc")->caption = "��������";
                c("tabControl2")->text = "������������
���������� ���������";
                c("combobox1")->itemIndex = 1;
                c("lscr")->caption = "���������:";
                c("applyB4")->caption = "��������� ���������";
                c("spb")->caption = "�������";
                c("rfs")->caption = "��������";
                c("spButton1")->caption = "��������";
                c("fmProgsEdit->button1")->caption = "�������������";
                c("fmEditButton->button4")->caption = "������";
                c("fmEditButton->label1")->caption = "������:";
                c("fmEditButton->label2")->caption = "���������:";
                c("fmEditButton->label3")->caption = "���:";


                $message = array( 0 => "�� ������� ������������ �����! ���: 0xe", 2 => "�������� ������!", 1 => "�� ������ ��������� � ����, �� �� ��������� ���. ��������� ���� ����?", 3 => "���� �� ������� ���������!", 4 => "�������� ������.",
                5 => "�������������", 6 => "������", 7 => "����������, �������� ������ � ������!", 8 => "�������", 9 => "���������", 10 => "������ (��)", 11 => "����������, ������������� ������!", 12 => "�� ����� ������ ������� ���� ������?");

                $lang_1 = "rus";

                if( $sc ) c("label3")->caption = $message[9] . " " . $sc . " PHP " . $message[10];

                return true;
            }
            case 2: {
                c("tabControl1")->text = "Jeu
Programs
Scripts
A propos du programme";
                c("laun_lang")->caption = "Langue de launcer:";
                c("satp")->caption = "Ouvre SA TP";
                c("txd")->caption = "Ouvre TXD Workshop";
                c("applyB")->hint = "OK";
                c("applyB2")->hint = "OK";
                c("gta_sa")->caption = "Ouvre GTA:SA";
                c("checkbox1")->text = "Telecharger les plug-ins [ telecharger CLEO ]";
                c("unofText")->caption = "[ UNOFFICIAL ]  Rockstar North, Rockstar Games
n'a rien a voir avec ce programme!";
                c("verLabel")->caption = "v" . VER . " | par Emil Dalalyan";
                c("buildD")->caption = "L'assemblee par ". BUILD;
                c("samp")->caption = "Ouvre SAMP";
                c("combobox1")->text = "Anglais
Russe
Francais";
                c("edc")->caption = "Changer";
                c("tabControl2")->text = "Configuration
Manage de scripts";
                c("spb")->caption = "Delete";
                c("combobox1")->itemIndex = 2;
                c("lscr")->caption = "Ratio d'aspect:";
                c("rfs")->caption = "Recharger";
                c("spButton1")->caption = "Recharger";
                c("applyB4")->caption = "Definir ratio d'aspect";
                c("fmProgsEdit->button1")->caption = "Edit";
                c("fmEditButton->button4")->caption = "Cancel";
                c("fmEditButton->label1")->caption = "Icon:";
                c("fmEditButton->label2")->caption = "Execute:";
                c("fmEditButton->label3")->caption = "Name:";


                $message = array( 0 => "Fichier de executable non trouve! Code: 0xe", 2 => "Sel script!", 1 => "Vous avez apporte des modifications mais n'avez pas enregistre le fichier. Enregistrer le fichier?", 3 => "Echec d'enregistrement du fichier!", 4 => "Select de script.",
                5 => "Edit", 6 => "Le button", 7 => "Please, select button in list!", 8 => "Ouvre", 9 => "Loaded", 10 => "script (s)", 11 => "Please, restart launcher!", 12 => "Voulez-vous supprimer ce script?");

                $lang_1 = "fr";

                //Other

                if( $sc ) c("label3")->caption = $message[9] . " " . $sc . " PHP " . $message[10];
                return true;
            }
        }
        return false;
    }
}

?>