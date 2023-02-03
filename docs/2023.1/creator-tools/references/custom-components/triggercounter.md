# TriggerCounter

Triggers an event after the **Count** counter value reaches its specified **Target Count** value. The counter is incremented whenever one of the **Increment()** or **Increment(by)** methods are called, which can be triggered by any event in the scene.

Additional methods **SetTargetCount(count)** and **ResetCounter()** enable the counter behaviour to be modified dynamically through set interactions. An example use case would be to connect **SetTargetCount(count)** to **ScoreboardElement**'s **OnInitializeP1-P5** events to change the count required based on how many users are present.

![TriggerCounter component](https://www.flipsidexr.com/files/docs/screenshots/trigger-counter.png)

---

**Next:** [[Creator Tools / References / Custom components]]
