<?php

interface Interfacecmdline {
    public function create(CommandeLine $commandeLine);
    public function read();

    public function delete($id);
    public function fetch($id);
}







?>