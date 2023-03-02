# Prop kits

Prop kits are the way Flipside Creator Tools publishes your own custom props into Flipside Studio without them being embedded in a particular set. This makes them reusable across any sets.

Prop kits are similar to characters and sets in that they're created as Unity scenes. In the case of prop kits, the scene contains a single object with a **PropKit** component which contains a list of the props that make up the kit.

Each prop is a separate Unity prefab with a **PropElement** component attached in the same way as props are set up inside of a set.

When a kit is published, you won't see the kit itself in Flipside Studio, but rather you'll see each individual prop available under the **Props** menu's **Imported** category.

---

**Next:** [[: Interactivity]]
