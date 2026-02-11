# MedicationIbuprofen - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedicationIbuprofen**

## Example Medication: MedicationIbuprofen

Language: fr-CH

Profile: [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md)

**code**: Ibuprofen

### Ingredients

| | | |
| :--- | :--- | :--- |
| - | **Item[x]** | **IsActive** |
| * | Ibuprofen | true |



## Resource Content

```json
{
  "resourceType" : "Medication",
  "id" : "MedicationIbuprofen",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
    ]
  },
  "language" : "fr-CH",
  "code" : {
    "coding" : [
      {
        "system" : "http://www.whocc.no/atc",
        "code" : "M01AE01",
        "display" : "Ibuprofen"
      }
    ],
    "text" : "Ibuprofen"
  },
  "ingredient" : [
    {
      "itemCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "387207008",
            "display" : "Ibuprofen (substance)"
          }
        ],
        "text" : "Ibuprofen"
      },
      "isActive" : true
    }
  ]
}

```
