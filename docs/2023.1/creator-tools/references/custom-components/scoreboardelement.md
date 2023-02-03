# ScoreboardElement

The ScoreboardElement keeps score for each user, or for cooperative play where the scores are combined to win or lose together. Optionally, it can also display scores on a TextMeshPro component.

You can tie event handlers in your set to the following list of events:

* **OnInitializeP1** - Called to initialize play for player 1.
* **OnInitializeP2** - Called to initialize play for player 2. Fired only if 2 players are present.
* **OnInitializeP3** - Called to initialize play for player 3. Fired only if 3 players are present.
* **OnInitializeP4** - Called to initialize play for player 4. Fired only if 4 players are present.
* **OnInitializeP5** - Called to initialize play for player 5. Fired only if 5 players are present.
* **OnPoints** - Called when points are awarded to any player.
* **OnWin** - Called when the game has been won.
* **OnLose** - Called when the game has been lost.
* **OnWinReached** - Called when the game has been won, but the **Continue After Win** property was checked.
* **OnReset** - Called when the game is reset.
* **OnCombinedScore(value)** - Called when the **Combine Scores To Win** property is checked. The value is between 0 and 1 and can be used for example to increment the fillAmount of a canvas image.

Note that there can be only one ScoreboardElement in a set, but it can be reused by resetting and changing the points values as needed. To reset the score, trigger the **ResetScores()** method from any event.

---

**Next:** [[Creator Tools / References / Custom components]]
