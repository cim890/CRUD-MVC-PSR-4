<?php
namespace Mvc\model;

use Mvc\Config\database;

class ArtikelModel

{
    public static function add()
    {
        if (isset($_POST['send']))
            {
                try {
                    
                    $judul = $_POST['judul'];
                    $isi = $_POST['isi'];
                    $sql= "INSERT INTO `artikel` (`judul`,`isi`) VALUES (?,?)";
                    $q = database::$pdo->prepare($sql);
                    $q->bindParam(1, $judul);
                    $q->bindParam(2, $isi);
                    $q->execute();

                    echo "<h3>Anda Berhasil Membuat Artikel</h3>";

                } catch(PDOException $e){
                    echo "<h3>Anda Gagal Membuat Artikel Karena: ".$e->getMessage()."</h3>";
                }
            }
    }

    public static function all()
    {
        $sql = "SELECT * FROM `artikel` ORDER BY `id` ASC";
        $q = database::$pdo->prepare($sql);
        $q->execute();
        $row = $q->fetchAll();
        return $row;
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
        $sql = "SELECT * FROM `artikel` ORDER BY `id` ASC limit 0,2";
        $q = database::$pdo->prepare($sql);
        $q->execute(array(1));
        $row = $q->fetchAll();
        return $row;
    }


    public static function edit()
    {

        if (isset($_POST['update']))
            {
                try {
                    
                    $id = $_POST['id'];
                    $judul = $_POST['judul'];
                    $isi = $_POST['isi'];
                    $sql = "UPDATE `artikel` SET `judul` = '$judul', `isi` = '$isi' WHERE `id` = '$id'";
                    $q = database::$pdo->prepare($sql);
                    $q->bindParam(1, $judul);
                    $q->bindParam(2, $isi);
                    $q->bindParam(3, $id);
                    $q->execute();

                    echo "<h3>Anda Berhasil Mengubah Artikel</h3>";
                    header('location: #close');

                } catch(PDOException $q){
                    echo "<h3>Anda Gagal Mengubah Artikel Karena: ".$q->getMessage()."</h3>";
                }
            }
    }

    public static function delete()
    {

        if (isset($_POST['hapus']))
            {
                try {
                    
                    $id = $_POST['id'];
                    $sql = "DELETE FROM `artikel` WHERE `id` = '$id'";
                    $q = database::$pdo->prepare($sql);
                    $q->bindParam(1, $id);
                    $q->execute();

                    echo "<h3>Anda Berhasil Menghapus Artikel</h3>";
                    header('location: #close');

                } catch(PDOException $q){
                    echo "<h3>Anda Gagal Mengubah Artikel Karena: ".$q->getMessage()."</h3>";
                }
            }
    }
}