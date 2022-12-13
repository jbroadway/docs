# OscElement

This component lets you connect [OSC](https://en.wikipedia.org/wiki/Open_Sound_Control) messages received by Flipside Studio to events in your set. This can be used to automate changes in your show using external OSC-compatible hardware and software interfaces.

![OscElement component](https://www.flipsidexr.com/files/docs/screenshots/oscelement.png)

Each OscElement listens at a single OSC message address that can be anything you define. They take the form **/message/address**. You can have any number of OscElement components in a set listening on different addresses, but you can only have one for each address.

You can also choose whether the OSC message should be re-transmitted over multiplayer, which will ensure it gets triggered for others as well, but it should be noted that if you're connecting it to other Flipside Creator Tools components like **FlipsideActions** or **ScoreboardElement**, they already broadcast their own events and you should leave the **Broadcast** checkbox unchecked in those combinations. Broadcasting is only needed when using it in combination with Unity's other components.

Each message will then trigger an associated event on the OscElement component based on the type of data passed to it. These include:

* **On Int Value** - Triggers when an integer is passed to it.
* **On Float Value** - Triggers when a float is passed to it.
* **On Long Value** - Triggers when a long is passed to it.
* **On Double Value** - Triggers when a double is passed to it.
* **On Boolean Value** - Triggers when a boolean (true or false) is passed to it.
* **On String Value** - Triggers when a string of characters is passed to it.
* **On Char Value** - Triggers when a single character is passed to it.

---

Next: [[Creator Tools / References / Custom components]]
