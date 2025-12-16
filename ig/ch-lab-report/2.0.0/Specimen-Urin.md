# Urin - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Urin**

## Example Specimen: Urin

Profile: [Specimen: Laboratory](http://hl7.eu/fhir/laboratory/0.1.1/StructureDefinition-Specimen-eu-lab.html)

**type**: Urine specimen (specimen)

**subject**: [Katarina Keller](Bundle-LabResultReport-4-sepsis.md#urn-uuid-14fbf29b-5dac-483e-b543-15031f12344b)

### Containers

| | |
| :--- | :--- |
| - | **Type** |
| * | Urine specimen container (physical object) |



## Resource Content

```json
{
  "resourceType" : "Specimen",
  "id" : "Urin",
  "meta" : {
    "profile" : [
      "http://hl7.eu/fhir/laboratory/StructureDefinition/Specimen-eu-lab"
    ]
  },
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "122575003",
        "display" : "Urine specimen (specimen)"
      }
    ]
  },
  "subject" : {
    "reference" : "urn:uuid:14fbf29b-5dac-483e-b543-15031f12344b",
    "display" : "Katarina Keller"
  },
  "container" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://snomed.info/sct",
            "code" : "706054001",
            "display" : "Urine specimen container (physical object)"
          }
        ]
      }
    }
  ]
}

```
