# UC 3: Frauenzimmer - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: Frauenzimmer**

## Example Organization: UC 3: Frauenzimmer

Language: de-CH

**name**: Frauenzimmer

**telecom**: [frauenzimmer@example.com](mailto:frauenzimmer@example.com), [+41 44 444 44 44](tel:+41444444444)

**address**: Zimmergasse 1 Musterhausen 8888 Schweiz 



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "UC3-Frauenzimmer",
  "language" : "de-CH",
  "name" : "Frauenzimmer",
  "telecom" : [
    {
      "system" : "email",
      "value" : "frauenzimmer@example.com"
    },
    {
      "system" : "phone",
      "value" : "+41 44 444 44 44",
      "use" : "work"
    }
  ],
  "address" : [
    {
      "line" : ["Zimmergasse 1"],
      "city" : "Musterhausen",
      "postalCode" : "8888",
      "country" : "Schweiz"
    }
  ]
}

```
