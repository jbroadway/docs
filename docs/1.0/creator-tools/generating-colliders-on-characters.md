# Generating colliders on characters

When setting up new characters, the Flipside Creator Tools will generate physics colliders for your characters
to be able to interact with the virtual environment. This also helps prevent a character's parts from
intersecting with each other, such as an arm disappearing into a character's side.

### Basic collider setup

The colliders are added to a character via the **GenerateColliders** component that is added to the root game
object of a character in the Unity scene hierarchy, below the **AvatarModelReferences** component.

Here's how they look on a new character, with the **GenerateColliders** component shown beside them.

![GenerateColliders component](https://www.flipsidexr.com/files/docs/screenshots/generatecolliders-component.png)

### Customizing your colliders



### Adding colliders to older characters

To add colliders to a character that was created before Flipside supported colliders, open the character's
scene in Unity and select its root object in the hierarchy.

In the inspector window, click **Add Component** and select **GenerateColliders**. Finally, click on the
**Generate Colliders** button at the bottom of the component. You should see the colliders added to your
character in the **Scene** window.

From here, follow the steps under [customizing your colliders](#customizing-your-colliders) above.

---

Next: [[:Adding movement to hair, cloth, and tails]]
