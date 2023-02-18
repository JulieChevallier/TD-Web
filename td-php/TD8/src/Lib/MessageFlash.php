<?php
namespace App\Covoiturage\Lib;

use App\Covoiturage\Model\HTTP\Session;

class MessageFlash {

    // Les messages sont enregistrés en session associée à la clé suivante
    private static string $cleFlash = "_messagesFlash";

    public static function ajouter(string $type, string $message): void {
        if(Session::getInstance()->contient(MessageFlash::$cleFlash)) {
            $messages = Session::getInstance()->lire(MessageFlash::$cleFlash);
        }
        $messages[$type][] = $message;
        Session::getInstance()->enregistrer(static::$cleFlash, $messages);
    }

    public static function contientMessage(string $type): bool {
        return isset(Session::getInstance()->lire(static::$cleFlash)[$type]) && sizeof(Session::getInstance()->lire(static::$cleFlash)[$type]) > 0;
    }

    // Attention : la lecture doit détruire le message
    public static function lireMessages(string $type): array {

        $messagesType = [];
        if (self::contientMessage($type)) {
            $messages = Session::getInstance()->lire(static::$cleFlash);
            $messagesType = $messages[$type];
            $messages[$type] = [];
            Session::getInstance()->enregistrer(static::$cleFlash, $messages);
        }
        return $messagesType;
    }

    public static function lireTousMessages() : array {
        return Session::getInstance()->lire(static::$cleFlash);
    }

}
