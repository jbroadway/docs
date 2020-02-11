# Building interactions with a scoring system

The Creator Tools enable you to add interactions that include a scoring system using a handful of simple components. These components include:

* [ScoreboardElement](#scoreboardelement)
* [GunElement](#gunelement)
* [BulletElement](#bulletelement)
* [ThrowableElement](#throwableelement)
* [TargetElement](#targetelement)

### ScoreboardElement

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

### GunElement

The GunElement component enables an object to be fired. GunElement's can fire any object with a BulletElement component attached, which would typically be a prefab. The bullet is fired from the specified **Fire From** transform position along its forward direction with the specified **Velocity** value. Guns can have a bullet limit, can be reloaded by triggering the **Reload()** method from any event.

You can tie event handlers to the following list of events:

* **OnFire** - Called when a bullet has been fired.
* **OnEmptyFire** - Called when the trigger is pulled but the ammo has run out.

![GunElement component](https://www.flipsidexr.com/files/docs/screenshots/gun-element.png)

### BulletElement

The BulletElement component keeps track of who was holding the gun that fired it for the purposes of keeping score when the element hits a target or another player. A bullet has a **Destroy On Contact** property, as well as points to add when it hits a target or another player.

You can tie event handlers to the following list of events:

* **OnFired** - The bullet was fired.
* **OnHit** - The bullet has hit something.
* **OnHitTarget** - The bullet has hit a target.
* **OnHitPlayer** - The bullet has hit a player.

![BulletElement component](https://www.flipsidexr.com/files/docs/screenshots/bullet-element.png)

### ThrowableElement

The ThrowableElement component keeps track of who was holding the object for the purposes of keeping score when the element hits a target or another player. A throwable has a **Destroy On Contact** property, as well as points to add when it hits a target or another player.

You can tie event handlers to the following list of events:

* **OnHit** - The throwable has hit something.
* **OnHitTarget** - The throwable has hit a target.
* **OnHitPlayer** - The throwable has hit a player.

![ThrowableElement component](https://www.flipsidexr.com/files/docs/screenshots/throwable-element.png)

### TargetElement

The TargetElement component assigns points when a BulletElement or ThrowableElement hits it. Targets can override the point value of the bullet or throwable with its own value if the **Override Points On Hit** property is checked and the **Add Points On Hit** property is set to the specified points to award the shooter or thrower.

You can tie event handlers to the following list of events:

* **OnHit** - The target was hit.

![TargetElement component](https://www.flipsidexr.com/files/docs/screenshots/target-element.png)

---

Next: [[:Triggering Flipside actions]]
