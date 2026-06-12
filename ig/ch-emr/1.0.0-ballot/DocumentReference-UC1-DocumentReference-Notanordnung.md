# UC1-DocumentReference-Notanordnung - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-DocumentReference-Notanordnung**

## Example DocumentReference: UC1-DocumentReference-Notanordnung

Profile: [CH Emergency Record Advance Directive DocumentReference](StructureDefinition-ch-emr-documentreference-advance-directive.md)

**status**: Current

**type**: Portable medical order form

**category**: Advance directive report

**subject**: [Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)](Patient-UC1-Patient-MusterMax.md)

**date**: 2024-01-15 09:00:00+0100

**author**: [Practitioner UC1 Hausarzt (official)](Practitioner-UC1-Practitioner-Hausarzt.md)

**description**: Ärztliche Notanordnung

> **content**

### Attachments

| | | |
| :--- | :--- | :--- |
| - | **ContentType** | **Url** |
| * | application/pdf | [https://example.org/documents/UC1-Notanordnung.pdf](https://example.org/documents/UC1-Notanordnung.pdf) |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "UC1-DocumentReference-Notanordnung",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference-advance-directive"]
  },
  "status" : "current",
  "type" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "93037-0"
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
    "reference" : "Patient/UC1-Patient-MusterMax"
  },
  "date" : "2024-01-15T09:00:00+01:00",
  "author" : [{
    "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
  }],
  "description" : "Ärztliche Notanordnung",
  "content" : [{
    "attachment" : {
      "contentType" : "application/pdf",
      "url" : "https://example.org/documents/UC1-Notanordnung.pdf"
    }
  }]
}

```
