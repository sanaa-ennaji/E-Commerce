<?php 

Interface InterfaceClient {
    public function add(Client $client);
    public function delete($ID_Client);
    public function update(Client $client);
    public function display();
}
?>