# UC2-RelatedPerson-Spitex - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-RelatedPerson-Spitex**

## Example RelatedPerson: UC2-RelatedPerson-Spitex

Profile: [CH Emergency Record RelatedPerson](StructureDefinition-ch-emr-relatedperson.md)

**active**: true

**patient**: [Walter Schmid (official) Male, DoB: 1947-04-12 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756012222222222222)](Patient-UC2-Patient-WalterSchmid.md)

**relationship**: Spitex (Pflegedienst)

**name**: Spitex Luzern (Pflegedienst)(Anonymous)

**telecom**: [+41 41 555 00 00](tel:+41415550000)

### Communications

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Preferred** |
| * | German | true |



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "UC2-RelatedPerson-Spitex",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"]
  },
  "active" : true,
  "patient" : {
    "reference" : "Patient/UC2-Patient-WalterSchmid"
  },
  "relationship" : [{
    "text" : "Spitex (Pflegedienst)"
  }],
  "name" : [{
    "use" : "anonymous",
    "text" : "Spitex Luzern (Pflegedienst)"
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "+41 41 555 00 00",
    "use" : "work",
    "rank" : 1
  }],
  "communication" : [{
    "language" : {
      "coding" : [{
        "system" : "urn:ietf:bcp:47",
        "code" : "de"
      }]
    },
    "preferred" : true
  }]
}

```
