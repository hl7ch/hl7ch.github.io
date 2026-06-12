# UC4-RelatedPerson-Ehefrau - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC4-RelatedPerson-Ehefrau**

## Example RelatedPerson: UC4-RelatedPerson-Ehefrau

Profile: [CH Emergency Record RelatedPerson](StructureDefinition-ch-emr-relatedperson.md)

**active**: true

**patient**: [Beat Frei (official) Male, DoB: 1968-07-22 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756014444444444444)](Patient-UC4-Patient-BeatFrei.md)

**relationship**: wife

**name**: Sandra Frei (Official)

**telecom**: [+41 79 555 33 44](tel:+41795553344)

**gender**: Female

### Communications

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Preferred** |
| * | German | true |



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "UC4-RelatedPerson-Ehefrau",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"]
  },
  "active" : true,
  "patient" : {
    "reference" : "Patient/UC4-Patient-BeatFrei"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "WIFE",
      "display" : "wife"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Frei",
    "given" : ["Sandra"]
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "+41 79 555 33 44",
    "use" : "mobile",
    "rank" : 1
  }],
  "gender" : "female",
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
