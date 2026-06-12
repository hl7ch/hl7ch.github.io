# EX-AdvanceDirective - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-AdvanceDirective**

## Example DocumentReference: EX-AdvanceDirective

Profile: [CH Emergency Record Advance Directive DocumentReference](StructureDefinition-ch-emr-documentreference-advance-directive.md)

**status**: Current

**type**: Advance directive

**category**: Advance directive report

**subject**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**date**: 2024-01-15 14:30:00+0100

**description**: Patientenverfügung im Schlafzimmer

> **content**

### Attachments

| | | |
| :--- | :--- | :--- |
| - | **ContentType** | **Url** |
| * | application/pdf | [https://example.org/documents/EX-AdvanceDirective.pdf](https://example.org/documents/EX-AdvanceDirective.pdf) |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "EX-AdvanceDirective",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference-advance-directive"]
  },
  "status" : "current",
  "type" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "75320-2"
    }]
  },
  "category" : [{
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "371538006"
    }]
  }],
  "subject" : {
    "reference" : "Patient/EX-Patient"
  },
  "date" : "2024-01-15T14:30:00+01:00",
  "description" : "Patientenverfügung im Schlafzimmer",
  "content" : [{
    "attachment" : {
      "contentType" : "application/pdf",
      "url" : "https://example.org/documents/EX-AdvanceDirective.pdf"
    }
  }]
}

```
