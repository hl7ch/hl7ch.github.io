# UC5-RelatedPerson-Ehemann - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC5-RelatedPerson-Ehemann**

## Example RelatedPerson: UC5-RelatedPerson-Ehemann

Profile: [CH Emergency Record RelatedPerson](StructureDefinition-ch-emr-relatedperson.md)

**active**: true

**patient**: [Anna Meier (official) Female, DoB: 1972-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015555555555555)](Patient-UC5-Patient-AnnaMeier.md)

**relationship**: husband

**name**: Thomas Meier (Official)

**telecom**: [+41 79 555 55 66](tel:+41795555566)

**gender**: Male

### Communications

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Preferred** |
| * | German | true |



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "UC5-RelatedPerson-Ehemann",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"]
  },
  "active" : true,
  "patient" : {
    "reference" : "Patient/UC5-Patient-AnnaMeier"
  },
  "relationship" : [{
    "coding" : [{
      "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
      "code" : "HUSB",
      "display" : "husband"
    }]
  }],
  "name" : [{
    "use" : "official",
    "family" : "Meier",
    "given" : ["Thomas"]
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "+41 79 555 55 66",
    "use" : "mobile",
    "rank" : 1
  }],
  "gender" : "male",
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
