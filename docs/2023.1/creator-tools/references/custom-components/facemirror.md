# FaceMirror

FaceMirror lets you animate faces on non-character elements in a set, such as props or even inanimate objects.

![FaceMirror component](https://www.flipsidexr.com/files/docs/screenshots/facemirror-component.png)

FaceMirror supports the following customizable behaviours:

* **Mirror Face** - What initiates the face being activated. This can be automatically assigned to one of the actors on set based on their number in the multiplayer session, or can be activated when a user grabs the prop that the FaceMirror is attached to (if it's attached to a prop).
* **Unmirror On Release** - Whether to automatically stop mirroring when the prop is released. Otherwise, it will continue mirroring until the scene is changed or another actor is assigned to it.
* **Prop Element** - If the FaceMirror is attached to a child object of a PropElement and not the root element that PropElement lives on, you can link them manually here.
* **Eyes** - A list of transforms that should be rotated to simulate eye movement on the FaceMirror.
* **Ignore Eye Targets** - Whether to ignore or follow EyeTarget elements in the scene.
* **Unique ID** - This is a unique identifier for the FaceMirror, so that multiple FaceMirror components can live in the same scene and the facial animations can be routed correctly. The ID is auto-generated, but you can regenerate it with the **Regenerate** button if needed.

Once you've added a FaceMirror component, to set up the face mapping, add one or more **FacialExpressionReference** components on the same game object and configure those the same way as [[creator tools / tutorials / mapping facial expressions]] works on regular characters.

---

**Next:** [[:FacialExpressionReference]]
