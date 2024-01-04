<?php


interface Interfacecmd {

    public function create(Commande $cmd);
    public function read();
    public function delete($id);
    public function fetch($id);

}









?>