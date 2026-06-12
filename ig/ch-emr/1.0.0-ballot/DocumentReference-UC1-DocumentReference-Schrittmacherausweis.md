# UC1-DocumentReference-Schrittmacherausweis - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-DocumentReference-Schrittmacherausweis**

## Example DocumentReference: UC1-DocumentReference-Schrittmacherausweis

Profile: [CH Emergency Record DocumentReference](StructureDefinition-ch-emr-documentreference.md)

**status**: Current

**type**: Summary clinical document (record artifact)

**subject**: [Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)](Patient-UC1-Patient-MusterMax.md)

**date**: 2015-06-15 11:00:00+0200

**author**: [Practitioner UC1 Hausarzt (official)](Practitioner-UC1-Practitioner-Hausarzt.md)

**description**: Schrittmacherausweis

> **content**

### Attachments

| | | |
| :--- | :--- | :--- |
| - | **ContentType** | **Url** |
| * | application/pdf | [https://example.org/documents/UC1-Schrittmacherausweis.pdf](https://example.org/documents/UC1-Schrittmacherausweis.pdf) |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "UC1-DocumentReference-Schrittmacherausweis",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-documentreference"]
  },
  "status" : "current",
  "type" : {
    "coding" : [{
      "system" : "http://snomed.info/sct",
      "version" : "http://snomed.info/sct/2011000195101",
      "code" : "422735006"
    }]
  },
  "subject" : {
    "reference" : "Patient/UC1-Patient-MusterMax"
  },
  "date" : "2015-06-15T11:00:00+02:00",
  "author" : [{
    "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
  }],
  "description" : "Schrittmacherausweis",
  "content" : [{
    "attachment" : {
      "contentType" : "application/pdf",
      "url" : "https://example.org/documents/UC1-Schrittmacherausweis.pdf"
    }
  }]
}

```
