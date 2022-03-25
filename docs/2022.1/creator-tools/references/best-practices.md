# Best practices

## General

- To duplicate a character, prop kit, or set, always use the **Flipside Creator Tools > Duplicate Selected Scene** tool instead of duplicating it in the Project window directly (and never duplicate Unity assets in Windows Explorer). This will ensure the asset bundle labels are updating as well and avoid running into issues.

## Characters

- Make sure to adjust the **Center Eye** height (Y position) on **AvatarModelReferences** to your character's eye height. Avoid adjusting the other position and rotation values.
- Make sure to adjust the **Name Tag Height** so the name tag will appear at a good height visually above your character's head. On tall characters, the default may be too low and may cut into the head itself, while on short characters, it may be too high and the name tag will appear too far above the character's head.

## Prop kits

- Avoid putting props in the prop kit scene (e.g., as children of the prop kit objects). Instead, make each prop a prefabs by dragging it into the Project window.
- Adjust your props so that their scale in the Unity editor is the scale you want them to be in Flipside Studio when first added to a set.

## Sets

- Leave the root object in the scene as well as the Contents objects (e.g., both of **My Set/Contents**) at position (0, 0, 0) and rotation (0, 0, 0, 0). Move the children of that into the positions and rotations you want them in.
- Adjust your set contents so that the position (0, 0, 0) with rotation (0, 0, 0, 0) is where you want actors to initially spawn onto the set.
- Make sure to adjust the initial position of the **Audience** component so that future immersive audiences spawn in a sensible spot for an audience to watch along.

---

Next: [[: Resources]]
