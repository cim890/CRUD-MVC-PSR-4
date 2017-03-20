<?php
namespace Mvc\model;

use Mvc\Config\database;

class ContactModel
{
    public static function all()
    {
        if (isset($_POST['submit']))
            {
                try {
                    
                    $nama = $_POST['nama'];
                    $telp = $_POST['telp'];
                    $email = $_POST['email'];
                    $pesan = $_POST['pesan'];

                    $sql = "INSERT INTO `kontak` (`nama`,`telp`,`email`,`pesan`) VALUES (?,?,?,?)";
                    $q = database::$pdo->prepare($sql);
                    $q->bindParam(1, $nama);
                    $q->bindParam(2, $telp);
                    $q->bindParam(3, $email);
                    $q->bindParam(4, $pesan);
                    $q->execute();

                    echo "<h3 class='message'>Pesan berhasil terkirim, Terima kasih telah mengontak kami</h3>";

                } catch(PDOException $e){
                    echo "<h3 class='message'>Pesan gagal terkirim karena: ".$e->getMessage()."</h3>";
                }
            }
    }

    public static function one($id)
    {
        $id = filter_var($id, FILTER_VALIDATE_INT);
        $sql = "SELECT * FROM `artikel` WHERE `id` = ?";
        $q = database::$pdo->prepare($sql);
        $q->execute(array($id));
        $row = $q->fetch();
        return $row;
    }

    public static function last()
    {
        $sql = "SELECT * FROM `artikel` ORDER BY `id` DESC limit 0,1";
        $q = database::$pdo->prepare($sql);
        $q->execute();
        $row = $q->fetchAll();
        return $row;
    }

    public static function other()
    {
        $sql = "SELECT * FROM `artikel` WHERE `id` != ? LIMIT 0,2";
        $q = database::$pdo->prepare($sql);
        $q->execute(array(1));
        $row = $q->fetchAll();
        return $row;
    }


}