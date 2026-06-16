# HealthcareService Orthopedics Fulfiller - CH UMZH Connect IG (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HealthcareService Orthopedics Fulfiller**

## Example HealthcareService: HealthcareService Orthopedics Fulfiller

**active**: true

**providedBy**: [http://registry.example.org/fhir/Organization/Fulfiller](http://registry.example.org/fhir/Organization/Fulfiller)

**type**: Referral to orthopedic service (procedure)

**name**: Orthopedic Surgery



## Resource Content

```json
{
  "resourceType" : "HealthcareService",
  "id" : "HealthcareServiceOrthopedicsFulfiller",
  "active" : true,
  "providedBy" : {
    "reference" : "http://registry.example.org/fhir/Organization/Fulfiller"
  },
  "type" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "code" : "183545006",
      "display" : "Referral to orthopedic service (procedure)"
    }]
  }],
  "name" : "Orthopedic Surgery"
}

```
