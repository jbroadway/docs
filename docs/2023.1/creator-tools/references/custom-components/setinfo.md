# SetInfo

**SetInfo** is the component that is used to define custom sets. It is the only required component on a set, and should be placed on the root object in the set's scene. It is usually added automatically for you when you choose **Flipside Creator Tools / Create Set** or **Flipside Creator Tools / Create Set From Current Scene**.

**SetInfo** has the following properties you can customize:

* **Set Name** - The name of your set.
* **Attributeion** - Attribution text for your set.
* **Root Object** - The root object in your set, which is usually auto-assigned and generally shouldn't be modified.
* **Audience** - The **Audience** component in your set.
* **Sky ID** - The ID of a sky in Flipside's backend. You can upload your own skies as equirectangular 360 photos, or choose from one of the built-in sky options.
* **Lighting Mode** - Sets the environment lighting source to use (skybox, trilight, flat, or custom).
* **Flat Ambient Light Color** - The color to affect the environment lighting if flat lighting mode is chosen.
* **Trilight Ambient Colours** - The sky, equator, and ground colors to affect the environment lighting if trilight lighting mode is chosen.
* **Ambient Intensity** - The intensity of the ambient light.

You'll also see a **Resource Usage** section at the bottom of the **SetInfo** component, which provides you with info about the resources that your set will use in Flipside Studio, as well as recommended limits for PC and mobile VR platforms.

---

Next: [[Creator Tools / References / Custom components]]
