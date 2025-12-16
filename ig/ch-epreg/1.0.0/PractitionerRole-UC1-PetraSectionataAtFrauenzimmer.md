# UC 1: Petra Sectionata @ Frauenzimmer - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC 1: Petra Sectionata @ Frauenzimmer**

## Example PractitionerRole: UC 1: Petra Sectionata @ Frauenzimmer

Language: de-CH

**practitioner**: [Practitioner Petra Sectionata](Practitioner-UC1-PetraSectionata.md)

**organization**: [Organization Frauenzimmer](Organization-UC1-Frauenzimmer.md)

**code**: Arzt/Ärztin

**specialty**: Gynäkologie und Geburtshilfe



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "UC1-PetraSectionataAtFrauenzimmer",
  "language" : "de-CH",
  "practitioner" : {
    "reference" : "Practitioner/UC1-PetraSectionata"
  },
  "organization" : {
    "reference" : "Organization/UC1-Frauenzimmer"
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
