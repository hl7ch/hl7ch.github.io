# Stabilo Boss - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Stabilo Boss**

## Example Practitioner: Stabilo Boss

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**name**: Stabilo Boss 

**telecom**: ph: 044 333 22 12, [stabilo.boss@praxisseeblick.ch](mailto:stabilo.boss@praxisseeblick.ch)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "StabiloBoss",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "name" : [
    {
      "family" : "Boss",
      "given" : ["Stabilo"]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "044 333 22 12"
    },
    {
      "system" : "email",
      "value" : "stabilo.boss@praxisseeblick.ch"
    }
  ]
}

```
