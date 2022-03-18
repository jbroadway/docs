# GenerateColliders

This is a secondary component added to characters that can be used to generate body physics colliders by analyzing the skinned mesh of your character model.

There are a number of override settings to control how colliders are generated and the generated colliders can be modified after the fact to fix overlapping and other issues found in testing.

![Generate Colliders component](https://www.flipsidexr.com/files/docs/screenshots/generate-colliders.png)

To generate colliders for a character, click the **Genrate Colliders** button. This will open a dialog window where you can choose between minimal, medium, and full colliders, as well as which skinned mesh renderers should be evaluated.

![Generate Colliders dialogue](https://www.flipsidexr.com/files/docs/screenshots/generate-colliders-dialogue.png)

Click **Generate Colliders & Import** when you're ready. Note that you can always remove the generated colliders by clicking **Clear Generated Colliders**, so you can easily recreate them and try out different collider levels to see what works best for your character.

---

Next: [[Creator Tools / References / Custom components]]
