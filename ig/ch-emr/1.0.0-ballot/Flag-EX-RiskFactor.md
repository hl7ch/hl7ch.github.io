# EX-RiskFactor - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-RiskFactor**

## Example Flag: EX-RiskFactor

Profile: [CH Emergency Record Risk to Healthcare Personnel](StructureDefinition-ch-emr-flag-risk-to-healthcare-personnel.md)

**status**: Active

**category**: Safety

**code**: Type B viral hepatitis

**subject**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)



## Resource Content

```json
{
  "resourceType" : "Flag",
  "id" : "EX-RiskFactor",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-flag-risk-to-healthcare-personnel"]
  },
  "status" : "active",
  "category" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/flag-category",
      "code" : "safety",
      "display" : "Safety"
    }]
  }],
  "code" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "66071002"
    }]
  },
  "subject" : {
    "reference" : "Patient/EX-Patient"
  }
}

```
