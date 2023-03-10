:omit-from-search

# TriggerOnce

Triggers an event only when the **Trigger Enabled** property is set to true. To listen for events, attach handlers to the **OnTriggered** event.

To re-enable the trigger, attach the **EnableTrigger()** method to any event in the scene. To disable the trigger, attach the **DisableTrigger()** method to any event in the scene. Note that it disables the trigger automatically when the **OnTriggered** event is fired.

![TriggerOnce component](https://www.flipsidexr.com/files/docs/screenshots/trigger-once.png)

---

Next: [[Creator Tools / References / Custom components]]
