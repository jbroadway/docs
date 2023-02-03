# FacialExpressionReference

One or more **FacialExpressionReference** components can be added alongside **AvatarModelReferences** to combine multiple face animation modes together on a single character.

**FacialExpressionReference** has the following properties you can customize:

* **Meshes** - A list of SkinnedMeshRenderer components to control for this face animator. These are used with the blend shape expression types.
* **Renderers** - A list of MeshRenderer components to control for this face animator. These are used with the texture expression types.
* **Expression Type** - This sets how the face is animated. [See here for more info on the various expression types](/docs/2021.1/creator-tools/concepts/characters).

Additional properties are available depending on the chosen expression type.

---

**Next:** [[:FlipsideActions]]
