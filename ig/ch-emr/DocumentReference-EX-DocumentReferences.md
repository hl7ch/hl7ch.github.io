# EX-DocumentReferences (organ donation) - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-DocumentReferences (organ donation)**

## Example DocumentReference: EX-DocumentReferences (organ donation)

Profile: [CH Emergency Record DocumentReference](StructureDefinition-ch-emr-documentreference.md)

**status**: Current

**type**: Organ donor card

**subject**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**date**: 2025-07-15 14:30:00+0200

**author**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**description**: Organspendeausweis ist im Protmonnaie

> **content**

### Attachments

| | |
| :--- | :--- |
| - | **ContentType** |
| * | application/pdf |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "EX-DocumentReferences",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference"]
  },
  "status" : "current",
  "type" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "772790007"
    }]
  },
  "subject" : {
    "reference" : "Patient/EX-Patient"
  },
  "date" : "2025-07-15T14:30:00+02:00",
  "author" : [{
    "reference" : "Patient/EX-Patient"
  }],
  "description" : "Organspendeausweis ist im Protmonnaie",
  "content" : [{
    "attachment" : {
      "contentType" : "application/pdf"
    }
  }]
}

```
