# UC 3: Claudia Frühblick @ Frauenzimmer - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 3: Claudia Frühblick @ Frauenzimmer**

## Example PractitionerRole: UC 3: Claudia Frühblick @ Frauenzimmer

Language: de-CH

**practitioner**: [Practitioner Claudia Frühblick](Practitioner-UC3-ClaudiaFruehblick.md)

**organization**: [Organization Frauenzimmer](Organization-UC3-Frauenzimmer.md)

**code**: Arzt/Ärztin

**specialty**: Gynäkologie und Geburtshilfe



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "UC3-ClaudiaFruehblickAtFrauenzimmer",
  "language" : "de-CH",
  "practitioner" : {
    "reference" : "Practitioner/UC3-ClaudiaFruehblick"
  },
  "organization" : {
    "reference" : "Organization/UC3-Frauenzimmer"
  },
  "code" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "309343006",
          "display" : "Arzt/Ärztin"
        }
      ]
    }
  ],
  "specialty" : [
    {
      "coding" : [
        {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.5",
          "code" : "1003",
          "display" : "Gynäkologie und Geburtshilfe"
        }
      ]
    }
  ]
}

```
