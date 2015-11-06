<?php
namespace Layer\Connector;
/**
 * Interface ConnectorInterface
 * @package Layer\Connector
 */
interface ConnectorInterface
{
    /**
     * @param $host
     * @param $user
     * @param $password
     * @return mixed
     */
    public function connect();
    /**
     * @param $db
     * @return mixed
     */
    public function connectClose($db);
}
