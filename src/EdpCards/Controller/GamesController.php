<?php
namespace EdpCards\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use EdpCards\Service\GameServiceAwareTrait;

class GamesController extends AbstractRestfulController
{
    use GameServiceAwareTrait;
    use HydratorAwareTrait;

    protected $identifierName = 'game_id';

    public function getList()
    {
        $games = $this->getGameService()->getActiveGames();

        return $this->jsonModel($games);
    }

    public function get($id)
    {
        $game = $this->getGameService()->getGame($id);

        return $this->jsonModel($game);
    }

    public function create($data)
    {
        $game = $this->getGameService()->createGame($data['name'], $data['decks'], $data['player_id']);
        $this->getResponse()->setStatusCode(201);
        return $this->jsonModel($game);
    }

    public function update($id, $data)
    {
    }

    public function delete($id)
    {
    }
}
