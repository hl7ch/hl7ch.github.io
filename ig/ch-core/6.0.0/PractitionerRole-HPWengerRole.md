# Hanspeter Wenger @ Spital Seeblick - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hanspeter Wenger @ Spital Seeblick**

## Example PractitionerRole: Hanspeter Wenger @ Spital Seeblick

Profile: [CH Core PractitionerRole EPR](StructureDefinition-ch-core-practitionerrole-epr.md)

**practitioner**: [Practitioner Hanspeter Wenger](Practitioner-HanspeterWengerByBFH.md)

**organization**: [Organization Spital Seeblick](Organization-SpitalSeeblick.md)

**code**: Physician

**specialty**: General medical practitioner



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "HPWengerRole",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitionerrole-epr"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/HanspeterWengerByBFH"
  },
  "organization" : {
    "reference" : "Organization/SpitalSeeblick"
  },
  "code" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "309343006",
          "display" : "Physician"
        }
      ]
    }
  ],
  "specialty" : [
    {
      "coding" : [
        {
          "system" : "urn:oid:2.16.756.5.30.1.127.3.5",
          "code" : "1040",
          "display" : "General medical practitioner"
        }
      ]
    }
  ]
}

```
