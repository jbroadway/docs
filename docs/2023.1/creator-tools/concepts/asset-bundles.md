# Asset bundles

[Asset bundles](https://docs.unity3d.com/Manual/AssetBundlesIntro.html) are Unity's proprietary file format for bundling, sharing, and importing content into Unity-based apps and games.

Behind the scenes, Flipside Creator Tools build a Unity asset bundle for each of your custom characters and sets, which then need to be uploaded to your account through the Flipside XR website.

## Asset bundles and security

As a security precaution, asset bundles do not include any actual code, so they can't include custom components that aren't already present in Flipside Studio. That's why we have to verify and approve any third party components we include in our [[creator tools / references / whitelist of allowed components]] before they can be used in your custom characters and sets.

Instead, asset bundles contain references to the components used, along with the custom settings you've added to those components, which are then mapped to the equivalent components in Flipside Studio. This makes it impossible for any malicious code to get into your custom assets, protecting you from potentially malicious behaviour that could otherwise be included in shared assets.

## Asset bundle labels

Asset bundles are identified by label instead of by file name. In Unity, asset bundle labels are found in the bottom right corner of the screen under the **Asset Labels** panel when you select a scene in the **Project** window.

Because asset bundles are referred to by label, those labels must be unique for each asset bundle in order to avoid having Flipside Studio think that two different bundles are the same. For this reason, Flipside Creator Tools automatically generates asset bundle labels that include the type of asset, your unique Flipside Creator ID, followed by the name of your scene file.

To duplicate a character or set without creating label conflicts, use the **Flipside Creator Tools / Duplicate Selected Scene** menu option whenever you duplicate a character or set.

## Caching asset bundles

In order to support working offline and working through connectivity issues, Flipside Studio implements an aggressive caching and background synchronization strategy, where asset bundles only have to be downloaded once and after that get loaded from the locally-stored copy instead.

Each time you upload a character or set bundle, a new cache version number is generated, which tells Flipside Studio to download the updated bundle file and replace the locally stored version with it.

If a bundle doesn't update correctly, it can be because it had trouble downloading the updated bundle file. If this happens, re-uploading the same updated bundle file is usually enough to fix the problem and get Flipside Studio to load the newest bundle file.

---

**Back:** [[Creator Tools / Concepts]]
