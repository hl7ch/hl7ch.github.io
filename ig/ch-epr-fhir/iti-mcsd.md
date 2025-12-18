# Mobile Care Services Discovery (mCSD) - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* **Mobile Care Services Discovery (mCSD)**

## Mobile Care Services Discovery (mCSD)

This section specifies Swiss national extensions to Mobile Care Services Discovery (mCSD). mCSD is [published](https://profiles.ihe.net/ITI/mCSD/index.html) as an IHE ITI Trial Implementation profile.

### Scope

In the Swiss EPR, the mCSD profile ensures that different systems can search for healthcare organizations and professionals. It also allows systems to provide updated information about healthcare organizations and professionals.

### Use Cases

A primary system wants to search for healthcare organizations or professionals. It can perform an [ITI-90](iti-90.md) request with search parameters to get a list of matched resources and retrieve a resource with its identifier. It offers an alternative to the HPD ITI-58 transaction, which is SOAP-based.

The **Request Care Services Updates** [ITI-91] transaction is not used in this national extension.

A primary system wants to provide updated information about its healthcare organizations or professionals to a directory. It can perform a [ITI-130](iti-130.md) request to update a resource. It offers an alternative to the HPD ITI-59 transaction, which is SOAP-based.

### Actors and Transactions, Content Specifications

This figure shows the actors directly involved in the **Mobile Care Services Discovery** Profile and the relevant transactions between them.

### Actor Options

The Swiss national extension does not implement the 'Location Distance Option'.

### Required Actor Grouping

This national extension enforces authentication and authorization for access control. Therefore, actors of this profile must be grouped with actors of other profiles according to the following table:

| | | | |
| :--- | :--- | :--- | :--- |
| Query Client | IUA Authorization Client | R | - |
| Data Source | IUA Authorization Client | R | - |
| Directory (with Feed Option) | IUA Resource Server | R | - |

Table 1: Grouping of mCSD actors required by this national extension.
### Security Consideration

This national extension enforces authentication and authorization of access to the **Care Services Selective Supplier** using the IUA profile as described in [IUA](iti-71.md).

### Examples

The Swiss extension uses [examples from eHealthSuisse](https://ehealthsuisse.ihe-europe.net/test_data/CommunityAdd_A_B_xml.zip): ![](assets/images/ehealthsuisse_HPD_Structure.png)

