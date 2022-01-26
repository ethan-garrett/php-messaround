<?php
$cardDeck = [2,2,2,2,3,3,3,3,4,4,4,4,5,5,5,5,6,6,6,6,7,7,7,7,8,8,8,8,9,9,9,9,10,10,10,10,
    'j', 'j', 'j', 'j', 'q', 'q', 'q', 'q', 'k', 'k', 'k', 'k', 'a', 'a', 'a', 'a'];

$i = 0;
$cardTotalHouse = null;
$cardTotalPlayer = null;

/**
 * takes the first item from the cardDeck array and checks to see if it is a string
 * if so replace it with the correct integer value, if not it simply passes through
 *
 * @param array $cardDeck - the array containing the cards
 * @return int - returns the value of the card
 */
function cardPick(array $cardDeck,  $cardTotalHouse,  $cardTotalPlayer): int {
    shuffle($cardDeck);
    $card = $cardDeck[0];
    if ($card === 'j' || $card === 'q' || $card ==='k') {
        return 10;
    }
    elseif ($card === 'a'){
        if ($cardTotalPlayer > 10 || $cardTotalHouse > 10) {
            return 1;
        }
        else {
            return 11;
        }

    }
    return $card;
}


/**takes the two scores and checks if either has gone over 21 or if its below 14.
 * If its over 21 it returns a string saying who has gone bust.
 * If it's less than 14 it draws another card updates the total and runs the function again
 * if neither has gone over it calls scoreComparison function and returns the result of that function instead
 *
 * @param int $cardTotalPlayer - score of player
 * @param int $cardTotalHouse - score of House
 * @return string - returns message saying which player has gone bust or returns result of scoreComparison
 */
function scoreChecker(int $cardTotalPlayer, int $cardTotalHouse, array $cardDeck): string {
    if ($cardTotalPlayer > 21) {
        return 'Player has gone bust' . callScores($cardTotalPlayer, $cardTotalHouse);
    }
    elseif ($cardTotalHouse > 21) {
        return 'House has gone bust' . callScores($cardTotalPlayer, $cardTotalHouse);
    }
    elseif ($cardTotalPlayer < 14){
        $cardTotalPlayer += cardPick($cardDeck,$cardTotalHouse, $cardTotalPlayer);
        return scoreChecker($cardTotalPlayer, $cardTotalHouse, $cardDeck);
    }
    elseif ($cardTotalHouse < 14) {
        $cardTotalHouse += cardPick($cardDeck, $cardTotalHouse, $cardTotalPlayer);
        return scoreChecker($cardTotalHouse, $cardTotalHouse, $cardDeck);
    }
    else {
        return scoreComparison($cardTotalPlayer, $cardTotalHouse);
    }
}

/**Compares the scores and outputs a winner
 *
 * @param int $cardTotalPlayer - Players score
 * @param int $cardTotalHouse - House score
 * @return string returns string announcing winner
 */
function scoreComparison (int $cardTotalPlayer, int $cardTotalHouse): string {
    if ($cardTotalHouse > $cardTotalPlayer) {
        return 'House wins' . callScores($cardTotalPlayer, $cardTotalHouse);
    }
    elseif ($cardTotalHouse === $cardTotalPlayer) {
        return 'Same score - Draw' . callScores($cardTotalPlayer, $cardTotalHouse);
    }
    else {
        return 'Player Wins' . callScores($cardTotalPlayer, $cardTotalHouse);
    }
}


/**echos the scores to the screen
 *
 * @param int $cardTotalPlayer - players score
 * @param int $cardTotalHouse - players score
 * @return string returns string announcing scores
 */
function callScores(int $cardTotalPlayer, int $cardTotalHouse): string {
    $break =  '<br>';
    $playerScore = 'Player scores - ' . $cardTotalPlayer;
    $houseScore = 'House scores - ' . $cardTotalHouse;
    return $break . $playerScore . $break . $houseScore . $break;
}

while ($i < 2) {
    shuffle($cardDeck);
    $cardTotalHouse += cardPick($cardDeck, $cardTotalHouse, $cardTotalPlayer);
    unset($cardDeck[0]);
    $cardTotalPlayer += cardPick($cardDeck, $cardTotalHouse, $cardTotalPlayer) ;
    unset($cardDeck[0]);
    $i++;
}


echo scoreChecker($cardTotalPlayer, $cardTotalHouse, $cardDeck);