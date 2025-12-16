# Copy Receiver Sabine Meier - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Copy Receiver Sabine Meier**

## Example Practitioner: Copy Receiver Sabine Meier

Profile: [CH Core Practitioner](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-practitioner.html)

**name**: Sabine Meier 

**telecom**: ph: 044 333 22 11, [sabine.meier@praxisseeblick.ch](mailto:sabine.meier@praxisseeblick.ch)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "CopyReceiverSabineMeier",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-practitioner"
    ]
  },
  "name" : [
    {
      "family" : "Meier",
      "given" : ["Sabine"],
      "prefix" : ["Dr. med."],
      "_prefix" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-EN-qualifier",
              "valueCode" : "AC"
            }
          ]
        }
      ]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "044 333 22 11"
    },
    {
      "system" : "email",
      "value" : "sabine.meier@praxisseeblick.ch"
    }
  ]
}

```
