<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

class QueryBuilder
{
    protected $pdo;
    /**
     * @inheritDoc
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define class for output
         */
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);

    }
    public function selectAllAss($table)
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define class for output
         */
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

    public function createBattleResults($gameid, $players, $results)
    {
        $nop = count($players);
        if ($nop == 4) {
            $statement = $this->pdo->prepare('INSERT INTO battles(gameid, playerid01, playerid02, playerid03, playerid04, wonby, score, dtPlayed) VALUES(:gameid, :player01,:player02,:player03,:player04,:playermax , :score, NOW())');
            $statement->bindParam(':player03', $players[2]);
            $statement->bindParam(':player04', $players[3]);
        }
        elseif ($nop == 3) {
            $statement = $this->pdo->prepare('INSERT INTO battles(gameid, playerid01, playerid02, playerid03, wonby, score, dtPlayed) VALUES(:gameid, :player01,:player02,:player03,:playermax , :score, NOW())');
            $statement->bindParam(':player03', $players[2]);
        }
            else {

                $statement = $this->pdo->prepare('INSERT INTO battles(gameid, playerid01, playerid02, wonby, score, dtPlayed) VALUES(:gameid, :player01,:player02,:playermax , :score, NOW())');
            }

        $statement->bindParam(':gameid', $gameid);

        $statement->bindParam(':player01', $players[0]);

        $statement->bindParam(':player02', $players[1]);

        $maxs = array_keys($results, max($results));

        $score= join('|',$results);
        $statement->bindParam(':playermax', $players[$maxs[0]]);
        $statement->bindParam(':score', $score);

         $statement->execute();

       // $statement->execute();


    }

    public function getAvailablePlayers()
    {
        $statement = $this->pdo->prepare("Select * from player where gamestatus = 1");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getNumberOfPlayerArr($gameid)
    {
        $statement = $this->pdo->prepare("select nop from games where id = :gameid");
        $statement->bindParam(':gameid', $gameid);
        $statement->execute();
        $helper = $statement->fetch(PDO::FETCH_ASSOC);

        $minmax = explode( '-', $helper['nop']);

        if (count($minmax) == 1)
        {

            return [(int) $minmax[0]];
        }
        else
        {
            return range((int) $minmax[0], (int) $minmax[1]);
        }
    }
    public function selectForList($table, $header, $description, $tag)
    {
        $statement = $this->pdo->prepare("select {$header} AS Header, {$description} AS Description,  {$tag} AS Tag  from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    //RETURNS ADD_ID OR -1
    public function addPlayer($username, $nickname)
    {
        //CHECK IF EMAIL EXISTS -- IF EXISTS RETURN FALSE
        $statement = $this->pdo->prepare("select email from users where email= '{$username}'");
        $statement->execute();
        if (count($statement->fetchAll(PDO::FETCH_ASSOC)) >= 1) return -1;

        //CHECK IF NICKNAME EXISTS -- IF EXISTS RETURN FALSE
        $statement = $this->pdo->prepare("select * from player where nickname=:nickname");
        $statement->bindParam(':nickname', $nickname);
        $statement->execute();
        if (count($statement->fetchAll(PDO::FETCH_ASSOC)) >= 1) return -1;

        //INSERT RECORD INTO USERS
        $statement = $this->pdo->prepare("insert into users( email) VALUES( :email)");
        $statement->bindParam(':email', $username);
        $statement->execute();

        $statement = $this->pdo->prepare("select id, email from users where email= '{$username}'");
        $statement->execute();
        $id = $statement->fetch(PDO::FETCH_ASSOC)[ 'id'];

        //INSERT RECORD INTO PLAYER TABLE
        $statement = $this->pdo->prepare("insert into player(id,  nickname) VALUES(:id, :nickname)");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':nickname', $nickname);
        $statement->execute();
        return $id;

    }

    public function updatePlayer($id,$password, $fname, $lname, $mobile)
    {
        $statement = $this->pdo->prepare(
                "UPDATE USERS
                        SET 
                            FNAME = :fname, 
                            LNAME = :lname, 
                            MOBILE = :mobile, 
                            PASSWORD = :password
                        WHERE id = :id");
        $statement->bindParam(':id', $id);
        $statement->bindParam(':fname', $fname);
        $statement->bindParam(':lname', $lname);
        $statement->bindParam(':mobile', $mobile);
        $statement->bindParam(':password', $password);
        $statement->execute();
    }

    public function checkLoginRegular($username, $password)
    {
        $statement = $this->pdo->prepare("select * from users where email= :email AND password= :password");
        $statement->bindParam(':email', $username);
        $statement->bindParam(':password', $password);
        $statement->execute();
        if (count($statement->fetchAll(PDO::FETCH_ASSOC)) == 1) return true;
        return false;
    }
    public function checkLoginAdmin($username, $password, $adminid)
    {
        $statement = $this->pdo->prepare("select * from users where email= :email AND password= :password AND adminid = :adminid AND adminid IS NOT NULL");
        $statement->bindParam(':email', $username);
        $statement->bindParam(':password', $password);
        $statement->bindParam(':adminid', $adminid);
        $statement->execute();
        if (count($statement->fetchAll(PDO::FETCH_ASSOC)) == 1) return true;
        return false;
    }
    public function selectPages($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}