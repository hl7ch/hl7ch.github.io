# UC2-DocumentReference-Patientenverfuegung - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-DocumentReference-Patientenverfuegung**

## Example DocumentReference: UC2-DocumentReference-Patientenverfuegung

Profile: [CH Emergency Record Advance Directive DocumentReference](StructureDefinition-ch-emr-documentreference-advance-directive.md)

**status**: Current

**type**: Advance directive

**category**: Living will (record artifact)

**subject**: [Walter Schmid (official) Male, DoB: 1947-04-12 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756012222222222222)](Patient-UC2-Patient-WalterSchmid.md)

**date**: 2022-04-20 11:00:00+0200

**author**: [Walter Schmid (official) Male, DoB: 1947-04-12 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756012222222222222)](Patient-UC2-Patient-WalterSchmid.md)

**custodian**: [Organization Hausarztpraxis UC2](Organization-UC2-Organization-Hausarztpraxis.md)

**description**: Original der Patientenverfügung liegt bei der Hausarztpraxis und kann dort angefordert werden.

> **content**

### Attachments

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Title** |
| * | German (Switzerland) | Patientenverfügung — bei Hausarztpraxis hinterlegt |




## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "UC2-DocumentReference-Patientenverfuegung",
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
    "reference" : "Patient/UC2-Patient-WalterSchmid"
  },
  "date" : "2022-04-20T11:00:00+02:00",
  "author" : [{
    "reference" : "Patient/UC2-Patient-WalterSchmid"
  }],
  "custodian" : {
    "reference" : "Organization/UC2-Organization-Hausarztpraxis"
  },
  "description" : "Original der Patientenverfügung liegt bei der Hausarztpraxis und kann dort angefordert werden.",
  "content" : [{
    "attachment" : {
      "language" : "de-CH",
      "title" : "Patientenverfügung — bei Hausarztpraxis hinterlegt"
    }
  }]
}

```
