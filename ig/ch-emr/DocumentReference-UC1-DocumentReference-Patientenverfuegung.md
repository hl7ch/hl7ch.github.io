# UC1-DocumentReference-Patientenverfuegung - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-DocumentReference-Patientenverfuegung**

## Example DocumentReference: UC1-DocumentReference-Patientenverfuegung

Profile: [CH Emergency Record Advance Directive DocumentReference](StructureDefinition-ch-emr-documentreference-advance-directive.md)

**status**: Current

**type**: Advance directive

**category**: Living will (record artifact)

**subject**: [Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)](Patient-UC1-Patient-MusterMax.md)

**date**: 2022-06-01 10:00:00+0200

**author**: [Max Muster (official) Male, DoB: 1964-01-01 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756011234567890123)](Patient-UC1-Patient-MusterMax.md)

**description**: Patientenverfügung beim Hausarzt hinterlegt

> **content**

### Attachments

| | | |
| :--- | :--- | :--- |
| - | **ContentType** | **Url** |
| * | application/pdf | [https://example.org/documents/UC1-Patientenverfuegung.pdf](https://example.org/documents/UC1-Patientenverfuegung.pdf) |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "UC1-DocumentReference-Patientenverfuegung",
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
      "code" : "1264561001"
    }]
  }],
  "subject" : {
    "reference" : "Patient/UC1-Patient-MusterMax"
  },
  "date" : "2022-06-01T10:00:00+02:00",
  "author" : [{
    "reference" : "Patient/UC1-Patient-MusterMax"
  }],
  "description" : "Patientenverfügung beim Hausarzt hinterlegt",
  "content" : [{
    "attachment" : {
      "contentType" : "application/pdf",
      "url" : "https://example.org/documents/UC1-Patientenverfuegung.pdf"
    }
  }]
}

```
