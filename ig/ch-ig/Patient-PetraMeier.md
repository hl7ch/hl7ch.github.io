# Petra Meier - CH IG (R4) v1.2.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Petra Meier**

## Example Patient: Petra Meier

Profile: [CH Core Patient](http://fhir.ch/ig/ch-core/6.0.0-ballot/StructureDefinition-ch-core-patient.html)

Petra Meier (no stated gender), DoB Unknown

-------



## Resource Content

```json
{
  "resourceType" : "Patient",
  "id" : "PetraMeier",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient"
    ]
  },
  "name" : [
    {
      "family" : "Meier",
      "given" : ["Petra"]
    }
  ]
}

```
