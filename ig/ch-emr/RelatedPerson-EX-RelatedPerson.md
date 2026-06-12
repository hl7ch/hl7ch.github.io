# EX-RelatedPerson - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-RelatedPerson**

## Example RelatedPerson: EX-RelatedPerson

Profile: [CH Emergency Record RelatedPerson](StructureDefinition-ch-emr-relatedperson.md)

**active**: true

**patient**: [Anna Schmidt Female, DoB: 1992-03-15 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#InsuranceCardNumber#80756015090002647590)](Patient-EX-Patient.md)

**relationship**: husband

**name**: Peter Schmidt (Official)

**telecom**: [+41 44 321 65 87](tel:+41443216587), [+41 79 876 54 32](tel:+41798765432), [peter.schmidt@example.ch](mailto:peter.schmidt@example.ch)

**gender**: Male

**birthDate**: 1975-09-22

**address**: Musterstrasse 123 Zürich 8001 CH (home)

### Communications

| | | |
| :--- | :--- | :--- |
| - | **Language** | **Preferred** |
| * | German | true |



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "EX-RelatedPerson",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-relatedperson"]
  },
  "active" : true,
  "patient" : {
    "reference" : "Patient/EX-Patient"
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
    "family" : "Schmidt",
    "given" : ["Peter"]
  }],
  "telecom" : [{
    "system" : "phone",
    "value" : "+41 44 321 65 87",
    "use" : "home",
    "rank" : 1
  },
  {
    "system" : "phone",
    "value" : "+41 79 876 54 32",
    "use" : "mobile",
    "rank" : 2
  },
  {
    "system" : "email",
    "value" : "peter.schmidt@example.ch",
    "use" : "home"
  }],
  "gender" : "male",
  "birthDate" : "1975-09-22",
  "address" : [{
    "use" : "home",
    "line" : ["Musterstrasse 123"],
    "city" : "Zürich",
    "postalCode" : "8001",
    "country" : "CH"
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
