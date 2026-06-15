# 1 Practitioner Rettungssanitaeter in Ausbildung - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1 Practitioner Rettungssanitaeter in Ausbildung**

## Example Practitioner: 1 Practitioner Rettungssanitaeter in Ausbildung



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "SaniInAusbildung",
  "name" : [{
    "family" : "Sanitaeter",
    "given" : ["Azubi"]
  }],
  "qualification" : [{
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
        "code" : "1000010",
        "display" : "paramedic-on-training"
      }],
      "text" : "Rettungssanitäter/in in Ausbildung"
    }
  }]
}

```
