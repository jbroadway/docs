# Props

Flipside Creator Tools can turn just about any object on a virtual set into a custom prop that you can use in your shows. Props help bring a set to life by making it so characters can interact with the set.

Interactions with props are handled through the **PropElement** component, and can be broken down into three types:

## Grabbing

Grabbing is the act of picking up a prop, which begins an interaction between a character and the selected prop. Catching a ball would be considered grabbing it as it comes towards you.

Grab events trigger an **OnBeginInteraction** event that you can use to attach additional behaviour that happens whenever a prop is grabbed.

## Using

Using a prop means pressing the index finger trigger on your controller while holding a prop. Shooting a gun would be an example of using a prop.

Events can triggered when you press the trigger down or when you release the trigger, using the **OnUseButtonDown** and **OnUseButtonUp** events, respectively.

## Releasing

The opposite of grabbing, releasing lets go of a prop and ends listening for other types of interactions on it. Throwing, dropping, or putting an object down are all considered release events.

Release events trigger an **OnEndInteraction** event that you can use to attach additional behaviour that happens when a pop is dropped. This is often used to reset or disable things that were enabled during a grab or use event.

---

Next: [[: Prop kits]]
